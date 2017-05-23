<?php 

namespace App\Controllers;

use App\Models as Model;

use App\Interfaces\ControllerInterface;

class Film extends Controller implements ControllerInterface {

	public function index() {

		// ladda in lista på alla Producer
		// hämta user som har rollen med id 4 och spara i variabeln producers
		$producers = Model\User::whereHas(
			'roles', function($query) {
				$query->where('id', 4);
			})
			->get();

		// ladda in lista på alla Writers
		// hämta user som har rollen med id 2 och spara i variabeln writers
		$writers = Model\User::whereHas(
			'roles', function($query) {
				$query->where('id', 2);
			})
			->get();

		$input = [];
		$errors = [];
		if(isset($_POST["submit"])) {
			if (isset($_POST['titel'])) {
				$input['titel'] = $_POST['titel'];
			} else {
				$errors[] = "titel";
			}

			if (!empty($_POST['producer'])) {
				$input['producer'] = $_POST['producer'];
			} else {
				$errors[] = "producer";
			}

			if (!empty($_POST['writer'])) {
				$input['writer'] = $_POST['writer'];
			} else {
				$errors[] = "writer";
			}

			if (!empty($_POST['rates'])) {
				$input['rate'] = $_POST['rates'];
			} else {
				$errors[] = "rate";
			}

			if (!empty($_POST['trailer'])) {
				$input['trailer'] = $_POST['trailer'];
			} else {
				$errors[] = "trailer";
			}

			if (!empty($_POST['release_year'])) {
				$input['release_year'] = $_POST['release_year'];
			} else {
				$errors[] = "release year";
			}

			if (isset($_POST['info'])) {
				$input['info'] = $_POST['info'];
			}

			if (isset($_POST['bild'])) {
				$input['bild'] = htmlentities($_POST['bild']);
			}

			if(!empty($_POST['genres'])){
				$input['genre'] = $_POST['genres'];
			} else {
				$errors[] = "genre";
			}

			if(!empty($_POST["star"]) && is_array($_POST["star"])) {
				$stars = $_POST["star"];
			} else {
				$errors[] = "stars";
			}

			// kolla om användaren finns och om inte så skapa den
	 		if (\App\Models\Movie::where($input)->exists() === false && count($errors) == 0) {
				$new_movie = \App\Models\Movie::create($input);
				$new_movie->users()->attach($stars);
				echo "Sparad!<br>";
	 		}
		}

 		include("../app/Views/forms/film.php");
 	}

 	public function edit($id) {

 		$movie = Model\Movie::find($id);
 		// ladda in lista på alla Producer
		// hämta user som har rollen med id 4 och spara i variabeln producers
		$producers = Model\User::whereHas(
			'roles', function($query) {
				$query->where('id', 4);
			})
			->get();

		// ladda in lista på alla Writers
		// hämta user som har rollen med id 2 och spara i variabeln writers
		$writers = Model\User::whereHas(
			'roles', function($query) {
				$query->where('id', 2);
			})
			->get();

 		if(isset($_POST["submit"])) {
 			$expectet_posts = ["titel","star","producer","writer","rate","trailer","release_year","bild","genre","info"];
 			$required_posts = ["titel","star","producer","writer","rate","trailer","release_year","genre"];
 			foreach($expectet_posts as $post) {
 				if(in_array($post, $required_posts) && empty($_POST[$post])) {
 					$errors[] = $post;
 				} else {
 					$errors = [];
 					$input[$post] = $_POST[$post];
 				}
 			}

 			if($movie->exists() === true && count($errors) == 0) {
 				$movie->update($input);
 				$movie->users()->sync($_POST["star"]);
 			}
 		}

		
 		if($movie) {
 			include("../app/Views/forms/movieEdit.php");
 		}
 	}

}
?>

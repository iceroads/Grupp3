<?php 

namespace App\Controllers;

use App\Models as Model;

class Film extends Controller {

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

		include("../app/Views/forms/film.php");

		$input = [];
		$errors = [];
		if (isset($_POST['titel'])) {
			$input['titel'] = $_POST['titel'];
		} else {
			$errors[] = "titel ";
		}

		if (isset($_POST['producers'])) {
			$input['producer'] = $_POST['producer'];
		} else {
			$errors[] = "producer ";
		}

		if (isset($_POST['writers'])) {
			$input['writer'] = $_POST['writer'];
		} else {
			$errors[] = "writer ";
		}

		if (isset($_POST['rates'])) {
			$input['rate'] = $_POST['rates'];
		} else {
			$errors[] = "rate ";
		}

		if (isset($_POST['trailer'])) {
			$input['trailer'] = $_POST['trailer'];
		} else {
			$errors[] = "trailer ";
		}

		if (isset($_POST['release_year'])) {
			$input['release_year'] = $_POST['release_year'];
		} else {
			$errors[] = "release year ";
		}

		if (isset($_POST['info'])) {
			$input['info'] = $_POST['info'];
		}

		if (isset($_POST['bild'])) {
			$input['bild'] = $_POST['bild'];
		}

		if(isset($_POST['genres'])){
			$input['genre'] = $_POST['genres'];
		} else {
			$errors[] = "genre ";
		}

		// kolla om användaren finns och om inte så skapa den
 		if (\App\Models\Movie::where($input)->exists() === false && count($errors) == 0) {
			$new_movie = \App\Models\Movie::create($input);
			echo "Sparad!<br>";
 		} else {
 			echo "<div class=container>Kunde inte skapa film!<br>Du har inte valt; </div>";
 			// sök igenom errors array efter felmedelanden och skriv ut dem
 			foreach ($errors as $error) {
 				echo "<div class=container><div class=list>" . $error . "</div></div>";
 			}
 		}

 
 			}
		}
?>

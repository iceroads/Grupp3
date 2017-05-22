<?php 

namespace App\Controllers;

use App\Models as Model;

class Film extends Controller {

	public function index() {
		include("../app/Views/forms/film.php");

		$input = [];
		$errors = [];
		if (isset($_POST['titel'])) {
			$input['titel'] = $_POST['titel'];
		} else {
			$errors[] = "Du har inte skrivit in titel!";
		}

		if (isset($_POST['producer'])) {
			$input['producer'] = $_POST['producer'];
		} else {
			$errors[] = "Du har inte skrivit in producer!";
		}

		if (isset($_POST['writer'])) {
			$input['writer'] = $_POST['writer'];
		} else {
			$errors[] = "Du har inte skrivit in writer!";
		}

		if (isset($_POST['rate'])) {
			$input['rate'] = $_POST['rate'];
		} else {
			$errors[] = "Du har inte skrivit in rate!";
		}

		if (isset($_POST['trailer'])) {
			$input['trailer'] = $_POST['trailer'];
		} else {
			$errors[] = "Du har inte skrivit in trailer!";
		}

		if (isset($_POST['release_year'])) {
			$input['release_year'] = $_POST['release_year'];
		} else {
			$errors[] = "Du har inte skrivit in release year!";
		}

		if (isset($_POST['info'])) {
			$input['info'] = $_POST['info'];
		}

		if (isset($_POST['bild'])) {
			$input['bild'] = $_POST['bild'];
		}

		if (isset($_POST['genre'])) {
			$input['genre'] = $_POST['genre'];
		} else {
			$errors[] = "Du har inte skrivit in genre!";
		}

		// kolla om användaren finns och om inte så skapa den
 		if (\App\Models\Movie::where($input)->exists() === false && count($errors) == 0) {
			$new_movie = \App\Models\Movie::create($input);
			echo "Sparad!<br>";
 		} else {
 			echo "Kunde inte skapa film!<br/>";
 			// sök igenom errors array efter felmedelanden och skriv ut dem
 			foreach ($errors as $error) {
 				echo $error . "<br>";
 			}
 		}

 
 			}
		}
?>

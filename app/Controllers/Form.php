<?php 

namespace App\Controllers;

use App\Models as Model;

class Form extends Controller {

	public function index() {

		$roles = \App\Models\Role::get();

		include("../app/Views/forms/form.php");

		$input = [];
		$errors = [];
		if (isset($_POST['f_namn'])) {
			$input['f_namn'] = $_POST['f_namn'];
		} else {
			$errors[] = "Du har inte skrivit in förnamn!";
		}

		if (isset($_POST['e_namn'])) {
			$input['e_namn'] = $_POST['e_namn'];
		} else {
			$errors[] = "Du har inte skrivit in efternamn!";
		}

		if (isset($_POST['birthdate'])) {
			$input['birthdate'] = $_POST['birthdate'];
		} else {
			$errors[] = "Du har inte skrivit in födelsedag!";
		}

		if (isset($_POST['info'])) {
			$input['info'] = $_POST['info'];
		}

		if (isset($_POST['bild'])) {
			$input['bild'] = $_POST['bild'];
		}

			
		// kolla om användaren finns och om inte så skapa den
 		if (\App\Models\User::where($input)->exists() === false && count($errors) == 0) {
			$new_user = \App\Models\User::create($input);
			echo "Sparad!<br>";
			if (isset($_POST['role'])) {
				foreach ($_POST['role'] as $profession) {
					$new_user->roles()->attach($profession);
				}
			}
 		} else {
 			echo "Kunde inte skapa skådespelare!<br/>";
 			// sök igenom errors array efter felmedelanden och skriv ut dem
 			foreach ($errors as $error) {
 				echo $error . "<br>";
 			}
 		}

 
 			}
		}
?>

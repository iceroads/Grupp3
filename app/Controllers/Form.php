<?php 

namespace App\Controllers;

use App\Models as Model;

use App\Interfaces\ControllerInterface;

class Form extends Controller implements ControllerInterface {

	public function index() {

		$roles = \App\Models\Role::get();

		$input = [];
		$errors = [];
		if(isset($_POST["submit"])) {

			if (!empty($_POST['f_namn'])) {
				$input['f_namn'] = $_POST['f_namn'];
			} else {
				$errors[] = "förnamn ";
			}

			if (!empty($_POST['e_namn'])) {
				$input['e_namn'] = $_POST['e_namn'];
			} else {
				$errors[] = "efternamn ";
			}

			if (!empty($_POST['birthdate'])) {
				$input['birthdate'] = $_POST['birthdate'];
			} else {
				$errors[] = "födelsedag ";
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
	 		}
		}
 		include("../app/Views/forms/form.php");
 
	}
}
?>

<?php 

namespace App\Controllers;

use App\Models as Model;

class Person extends Controller {

	public function index() {
        $person = Model\Person::orderBy("e_namn","ASC")->get();
		include("../app/Views/person/index.php");
	}
	public function show($id){
		$person = Model\Person::find($id);
		include("../app/Views/person/show.php");

	}
}
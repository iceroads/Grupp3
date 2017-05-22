<?php 

namespace App\Controllers;

use App\Models as Model;

class User extends Controller {

	public function index() {
    	$user = Model\User::get();
    	include("../app/Views/user/index.php");
	}

	public function show($id) {
    	$user = Model\User::find($id);
    	include("../app/Views/user/show.php");
	}
}
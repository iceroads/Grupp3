<?php 

namespace App\Controllers;

use App\Models as Model;

use App\Interfaces\ControllerInterface;

class User extends Controller implements ControllerInterface {

	public function index() {
    	$users = Model\User::get();
    	include("../app/Views/user/index.php");
	}

	public function show($id) {
    	$user = Model\User::find($id);
    	$moviesByRoles = \App\Models\Movie::where('producer', $user->id)
    	->orwhere('writer', $user->id)->get();
    	include("../app/Views/user/show.php");
	}

    
}
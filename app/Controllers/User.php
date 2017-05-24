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
    
    public function userToJson() {
        $users = Model\User::get();
            $JsonData = [];
        foreach ($users as $user) {
            $uservalue["name"]= $user->name();
            $uservalue["id"]= $user->id;
            array_push($JsonData, $uservalue);
        }
        header('Content-Type: application/json');
        echo json_encode($JsonData);
    }
    
}
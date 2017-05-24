<?php 

namespace App\Controllers;

use App\Models as Model;

use App\Interfaces\ControllerInterface;

class Movie extends Controller implements ControllerInterface {

	public function index() {
        $movies = Model\Movie::orderBy("titel", "ASC")->get();
		include("../app/Views/movie/index.php");
	}
	public function show($id){
		$movie = Model\Movie::find($id);
		$users = new \App\Models\User;
		
		include("../app/Views/movie/show.php");

	}
	
}
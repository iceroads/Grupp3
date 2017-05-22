<?php 

namespace App\Controllers;

use App\Models as Model;

class Movie extends Controller {

	public function index() {
        $movies = Model\Movie::orderBy("titel", "ASC")->get();
		include("../app/Views/movie/index.php");
	}
	public function show($id){
		$movie = Model\Movie::find($id);
		$users = new Model\User;
		include("../app/Views/movie/show.php");

	}
	public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
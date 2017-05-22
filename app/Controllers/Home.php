<?php 

namespace App\Controllers;

use App\Models as Model;

class Home extends Controller {

	public function index() {
        $toplist = Model\Movie::take(10)->orderBy("rate", "DESC")->get();
		include("../app/Views/home/index.php");
	}
}
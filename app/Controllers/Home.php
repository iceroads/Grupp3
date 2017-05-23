<?php 

namespace App\Controllers;

use App\Models as Model;

use App\Interfaces\ControllerInterface;

class Home extends Controller implements ControllerInterface {

	public function index() {
        $toplist = Model\Movie::take(10)->orderBy("rate", "DESC")->get();
		include("../app/Views/home/index.php");
	}
}
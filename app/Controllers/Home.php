<?php
namespace App\Controller;

use App\Interfaces\ControllerInterface;
use App\Core\Controller;
use \App\Model as Model;
use \App\Core\View;

class Home extends Controller implements ControllerInterface {
    public function index() {
        $movie = Model\Movie::orderBy('rate', 'DESC')->take(10)->get();
        View::output("home/index.php", $movie);
    }
}
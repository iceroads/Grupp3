<?php
namespace App\Controller;

use App\Interfaces\ControllerInterface;
use App\Core\Controller;
use \App\Model as Model;
use \App\Core\View;

class Movie extends Controller implements ControllerInterface {
    public function index() {
        $data["movie"] = Model\Movie::get();
        foreach($data["movie"] as $film) {
            $film["producer"] = Model\Person::find($film["producer"])->f_namn;
        }
        
        View::output("movie/index.php", $data);
    }
}
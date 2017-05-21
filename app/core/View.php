<?php

namespace App\core;

class View {
    public static function output($view, $data) {
        include "../app/views/header.php";
        include "../app/views/".$view;
        include "../app/views/footer.php";
    }
}
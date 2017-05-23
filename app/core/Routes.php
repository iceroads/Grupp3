<?php

namespace App\Core;

class Routes {

	// define default controller and default method that run when we bootstrap the app
	protected $controller = 'Home';

	protected $method = 'index';
	// parameters that we'll be able to pass through in the browser
	protected $params = [];

	public function __construct() {
		// gives us an array including a controller (if it's valid) as the first parameter,
		// calling a method within the controller as the second parameter and then any other parameters
		// we pass in to our controllers (ex. using views) which could consist of ex. $id
		$url = $this->parseUrl();

		//print_r($url);

		// check if controller exists, bc if it doesn't, 
		// we don't wanna set the controller but instead use the default one
		if(file_exists('../app/Controllers/' . $url[0] . '.php')) {
			// if the controller exists as a file, we wanna set it to url[0] (=name of the controller that we've called)
			// so that it essentially will replace the default controller
			$this->controller = $url[0];
			// then we unset it to remove it from the array so that it doesn't get send to the params
			unset($url[0]);
			// OBS! if the controller doens't exist as a file, the code block within this if-statement won't run
			// and only the default controller (home) will show
		}
		// once the url[0] is unset, we wanna require in the controller that we have called
		// default controller (home) will be required if the called controller file doesn't exist
		require_once '../app/Controllers/' . $this->controller . '.php';

		$controller = "\\App\\Controllers\\" . $this->controller;

		// we create a new instance (object) of $this->controller
		// ex. Home controller will become a Home object 
		
		$this->controller = new $controller;
		// var_dump($this->controller);

		// here we check if the controller object created above has a method (second url parameter)
		// ex. localhost/Grupp3/public/home/INDEX/params
		if (isset($url[1])) {
			// checks if the class method exists in the object, ex. our controller Home
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
				// unset gives us a leftover params array that we can parse through to our controller
			}
		}
		// print_r($url);

		// check if the url has any content, then rebase values in array so they start at 0, else set params to empty
		$this->params = $url ? array_values($url) : [];

		// now we call the controller and method that we've been checking! 
		// What will we get? THE METHOD INSIDE THE CONTROLLER :D ex. the index method in our Home controller!
		call_user_func_array([$this->controller, $this->method], $this->params);
	}
	// function that will give us the different parts to the URL 
	// (the controller, the method and any params ex. localhost/Grupp3/public/HOME/INDEX/TEST)
	public function parseUrl() {
		// check if the url is set in the browser, using GET bc we're using .htaccess to then rewrite the url
		// and parse it through as a GET variable
		if (isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}
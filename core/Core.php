<?php
	error_reporting(E_ALL);
	ini_set("display_errors", "On");

class Core {

 	#Essa funcao é a rum
 	public function run(){

		$url = '/';
		if(isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		$params = array();

		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'HomeController';
			$currentAction = 'index';
		}


		if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
			$currentController = 'HomeController';
      #$currentController = 'notfoundController';
			$currentAction = 'index';
		}


		$c = new $currentController();

		call_user_func_array(array($c, $currentAction), $params);







 	}#Fechar funcao run

}
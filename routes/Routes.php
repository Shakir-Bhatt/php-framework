<?php

/*
 * Decleare all your routes here
*/

function validateRoutes($route){

	$routes = [
		'home'					=>  ['view' => 'home' , 'controller' => 'homeController'],
		'....'					=> 	['view' => '....' , 'controller' => '...............'],
		'....'
	];

	if(isset($routes[$route])){
		return $routes[$route];
	} else{
		return ['view' => '404' , 'controller' => 'errorController'];
	}

} 

?>
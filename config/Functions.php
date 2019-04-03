<?php

# Function defination section

function debug($message,$exit=false){
	echo "<pre>";
	print_r($message);
	echo "\n";
	if($exit){
		exit;
	}
}

function asset($filePath){
	$filePath = ltrim($filePath,"/");
	$path = "";//rtrim(BASEURL.PROJECTDIR,"index.php");
	return $path.'assets/'.$filePath;

}

function views($filePath){
	$filePath = ltrim($filePath,"/");
	return 'views/'.$filePath;
}

function phpFiles($filePath){
	$filePath = ltrim($filePath,"/");
	return 'controllers/'.$filePath;
}

function route($routeName){
	$routeName = ltrim($routeName,"/");
    return $routeName;
}

function includeFileToView($db){
	if(file_exists(phpFiles($_SESSION["controller"]))){
		include_once(phpFiles($_SESSION["controller"]));
	} else {
		//debug(debug_backtrace());
		exit(" File : <b>" .phpFiles($_SESSION["controller"]) . "</b> not exists");
	}
	if(file_exists(views($_SESSION["view"]))){
		include_once(views($_SESSION["view"]));
	} else {
		exit(" File : <b>" .views($_SESSION["view"]) . "</b> not exists");
	}
    //debug(views($_SESSION["fileNameToExecute"]),1);
	
}





?>
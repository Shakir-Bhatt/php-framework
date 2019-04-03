<?php
    //error_reporting(E_ALL);
    session_start();
    defineConstants();

    include_once (ABSPATH . "/config/Functions.php");
    include_once (ABSPATH . "/config/connection.php");
    include_once (ABSPATH . "/routes/Routes.php");
    //debug(BASEURL.PROJECTDIR,1);

    $uri = basename($_SERVER['REQUEST_URI']);

    //debug($uri,1);
    $fileName = validateRoutes($uri);
    try{
        if(isset($fileName['view']) && isset($fileName['controller'])){
            $_SESSION["view"] = $fileName['view'] . ".php";
            $_SESSION["controller"] = $fileName['controller'] . ".php";
        } 
    }catch(\Exceptioin $e){
        exit($e->getMessage());
    }

    unset($_SESSION["breadcrumb"]);

    if($fileName['view'] != 'home'){
        $_SESSION["breadcrumb"] = true;
        $_SESSION["breadcrumb-second"] =  $fileName['view'];
    } 

    include_once (ABSPATH."/layouts/mainlayout.php");

    function defineConstants(){
        define('ABSPATH', __DIR__);
        define('BASEURL', $_SERVER['HTTP_HOST']);
        define('PROJECTDIR', $_SERVER['REQUEST_URI']);
        define('ROOT', BASEURL.PROJECTDIR);
    }
?> 


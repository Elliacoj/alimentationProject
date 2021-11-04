<?php

use Amaur\App\controller\HomePageController;

require "../vendor/autoload.php";

session_start();

if(isset($_GET['controller'])) {
    $controller = "Amaur\\App\\controller\\" . ucfirst(filter_var($_GET['controller'], FILTER_SANITIZE_STRING)) . "Controller";
    if(class_exists($controller)) {

        $controller = new $controller();
        if(isset($_GET['action'])) {
            $action = filter_var($_GET['action'], FILTER_SANITIZE_STRING);
            try {
                $reflexion = new ReflectionClass($controller);
                if($reflexion->hasMethod($action)) {
                    $controller->$action();
                }
                else {
                    $controller->home();
                }
            }
            catch (ReflectionException $e) {}
        }
        else {
            $controller->home();
        }
    }
    else {
        (new HomePageController())->home();
    }
}
else {
    (new HomePageController())->home();
}
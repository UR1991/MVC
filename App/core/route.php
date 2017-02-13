<?php
//Routing file

class Route
{ //Function for routing requests
  static function start()
  {
    //Default controller and action
    $controller_name = 'Main';
    $action_name = 'index';

    //Explode url by /
    $routes = explode('/', $_SERVER['REQUEST_URI']);

    //Get controller name
    if(!empty($routes[1]))
    {
      $controller_name = $routes[1];
    }

    //Get action name
    if(!empty($routes[2]))
    {
      $action_name = $routes[2];
    }

    //Add prefixes
    $model_name = "Model_".$controller_name;
    $controller_name = "Controller_".$controller_name;
    $action_name = "action_".$action_name;

    //Search model
    $model_file = strtolower($model_name).'.php';
    $model_path = "App/models/".$model_file;
    if(file_exists($model_path))
    {
      include("App/models/" . $model_file);
    }

    //Search controller
    $controller_file = strtolower($controller_name).'.php';
    $controller_path = "App/controllers/".$controller_file;
    if(file_exists($controller_path))
    {
      include ("App/controllers/".$controller_file);
    }
    else
    {
      Route::ErrorPage404();
    }

    //Create controller
    $controller = new $controller_name;
    $action = $action_name;
    if(method_exists($controller, $action))
    {
      $controller->$action();
    }
    else
    {
      Route::ErrorPage404();
    }
  }

  //Show this function if error
  function ErrorPage404()
  {
    $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
  }
}
 ?>

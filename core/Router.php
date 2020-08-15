
<?php

class Router
{
    public $routes = 
    [
      'GET'=>[],
      'POST'=>[]
    ];
    public function define($routes)
    {
      $this->routes = $routes;
    }
    public static function load($file)
    {
      $router = new static;
      require $file;
      return $router;
    }
    public function get($uri,$controller)
    {
      //$GET['names']='controller/add-names.php';
      $this->routes['GET'][$uri]=$controller;
    }
    public function post($uri,$controller)
    {
      $this->routes['POST'][$uri]=$controller;
    }

    public function direct($uri,$requestType)
    {
      if(array_key_exists($uri,$this->routes[$requestType]))
      {
        // return $this->routes[$requestType][$uri];
        //explode('@',$this->routes[$requestType][$uri]);
       //explode will return like this 
       //pagecontroller and home as an array 
       //The ... operator helps passing an array as two separate parametres
       //
        return $this->callAction(...explode('@',$this->routes[$requestType][$uri]));
      }
      throw new Exception('No routes');
    }
    protected function callAction($controller,$action)
    {
      // die(var_dump($controller,$action));
      $controller = new $controller;
      if(! method_exists($controller,$action))
      {
        throw new Exception("No {$action} action found on controller {$controller}");
      }
      return $controller->$action();
      // return (new $controller)->$action();
    }
}

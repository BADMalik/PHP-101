<?php

App::bind('config',require 'config.php');
App::bind('foo','bar');

 //die(var_dump(App::get('config')));

// $config =  require 'config.php';
// require 'core/Database/Connection.php';
// require 'core/Database/QueryBuilder.php';
// require 'core/Router.php';
// require 'Request.php';
//$pdo = Connection::make();

// return new QueryBuilder(Connection::make(App::get()));
// return new QueryBuilder(Connection::make($config['database']));

 App::bind('database',new QueryBuilder(Connection::make(App::get('config')['database'])));
// die(var_dump(App::getContainer()));
 //die(var_dump(App::get(['config'])));
//App::printNestedArray(App::getContainer());
function view($name,$data=[])
{
    //extract splits an array into varibles
    //['a'=>'bilal','b'=>'asdsad'];
    //now it will create
    // $a = bilal
    //$b = asasd
    extract($data);
    return require"views/{$name}.view.php"; 
}
function redirect($uri)
{
     header("Location:/{$uri}");
}
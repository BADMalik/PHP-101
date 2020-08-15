<?php

// $router->define
// ([
//   ''=>'controllers/index.php',
//   'about'=>'controllers/about.php',
//   'contact'=>'controllers/contact.php',
//   'about/culture'=>'controllers/about-culture.php',
//   'names'=>'controllers/add-names.php'
// ]);

// $router->get('','controllers/index.php');
// $router->get('about','controllers/about.php');
// $router->get('contact','controllers/contact.php');
// $router->get('about/culture','controllers/about-culture.php');

$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
// $router->get('about/culture','controllers/about-culture.php');
$router->get('users','UsersController@index');

$router->post('users','UsersController@store');

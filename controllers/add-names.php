<?php 

//$database = require 'core/bootstrap.php';

$database->insert('names',
[
    'name'=>$_POST['name']
    ]);
//var_dump($_SERVER);
//require ('views/add-names.view.php');
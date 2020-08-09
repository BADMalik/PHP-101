<?php
$config =  require 'config.php';
require 'core/Database/Connection.php';
require 'core/Database/QueryBuilder.php';
require 'core/Router.php';
require 'Request.php';
//$pdo = Connection::make();

return new QueryBuilder(Connection::make($config['database']));

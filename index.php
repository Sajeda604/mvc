<?php
// public/index.php


require_once __DIR__ . '/app/controllers/UserController.php';
require_once __DIR__ .'/app/models/UserModel.php';
require_once __DIR__ .'/config/config.php';
require_once __DIR__ .'/lib/DB/MysqliDb.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';


$config = require 'config/config.php';
$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);
$model=new UserModel($db);
//$controller=new UserController($model);





$request=$_SERVER['REQUEST_URI'];
define('BASE_PATH','/MVC/');
$controller=new UserController($model);
switch($request){
    case BASE_PATH:
        $controller->index();break;
    case BASE_PATH.'add':
           $controller->addUser();break;
     case BASE_PATH.'show':
                $controller->showUsers();break;

   //  case BASE_PATH.'delete'&id='.$_GET['id']:
     //               $controller->

}


?>

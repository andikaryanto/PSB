<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", getcwd());
define("APP_PATH", ROOT . DS);
error_reporting(E_ALL); 
ini_set('display_errors', 1);
// echo "APP_PATH";
session_start();
require_once __DIR__ . '/vendor/autoload.php';
include "Main/Loader.php";
// echo json_encode($_SERVER);
if($_SERVER['PATH_INFO'] == "/")
    include "Pages/index.php";

?>

	
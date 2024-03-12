<?php
define('APP_ROOT', __DIR__);
use PigoenPHP\PigoenPHP;

require_once APP_ROOT."/vendor/autoload.php";

$pigoen = new PigoenPHP();
echo("<pre>");
print_r($pigoen);
// $pigoen->getMessage();
$pigoen-setMessage("Hello Sushil");

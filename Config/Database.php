<?php
//namespace Config;
//use Env;
require "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

//class Database
//{
  // private string $host = "localhost:";
  // private string $user = "";
  // private string $pass = "";
  // private string $dbname = "";


$DB_PATH = $_ENV['path'];

public $table="users";

// }

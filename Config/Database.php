<?php
namespace Config;
use Env;

class Database
{
  private string $host = "localhost:";
  private string $user = "";
  private string $pass = "";
  private string $dbname = "";

  echo "<pre>";
  print_r($_ENV);
}

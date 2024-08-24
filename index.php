<?php
define("APP_ROOT", __dir__);

require_once APP_ROOT ."/vendor/autoload.php";
echo APP_ROOT;
echo "<pre>";
print_r($_SERVER);

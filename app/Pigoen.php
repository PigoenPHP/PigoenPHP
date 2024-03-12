<?php
namespace PigoenPHP;

class PigoenPHP
{
  public $message;
  
  public function __construct(){
    echo "Hey 👋 PigoenPHP!";
  }

  public function setMessage($msg){
   echo $this->message=$msg;
  }
}

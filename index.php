<?php

require_once 'vendor/autoload.php';
use App\classes;
use App\classes\Home;


$hello=new classes\HelloWorld();

$home=new Home();
$home->home();

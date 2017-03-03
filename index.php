<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
session_start();


//config
include_once './application/core/config.php';

//router
include './application/controllers/'.$_GET['page'].'.php';



$link->connect();



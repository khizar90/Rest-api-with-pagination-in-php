<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Orgin: *');
require_once 'config.php';


$pagination = new Student();
$pagination->pagination();
?>
<?php
require_once 'singLeton.php';

$demo1 = singLeton::getInstance(1);
$demo2 = singLeton::getInstance(2);

var_dump($demo1->getConfig(), $demo2->getConfig());

//打印出的值均为1
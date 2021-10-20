<?php 
require_once "DataClass.php";
//inheritance atau pewarisan di php

$manager = new Manager();
$manager->nama = "Fiqrian";
$manager->SayHello("joko");

$vp = new VicePresident();
$vp->nama = "Budi";
$vp->SayHello("Joko");
<?php
require_once "Manager.php";

//mendeklasrasikan ulang function dengan function overriding
$manager = new Manager();
$manager->nama = "Fiqrian";
$manager->SayHello("Budi");


$VP = new VicePresident();
$VP->nama = "Ucup";
$VP->SayHello("Budi");

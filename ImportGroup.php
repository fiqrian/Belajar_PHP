<?php 
require_once "Helper.php";
//import group file/{file1,file2} menggabungkan semua class dalam 1 namespace
use Grup\{grup1,grup2,grup3};
use function Helper\{helpme};
//memanggil class
$grup1 = new grup1();
$grup1 = new grup2();
$grup1 = new grup3();

helpme();
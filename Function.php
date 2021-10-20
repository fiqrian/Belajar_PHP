<?php 
//ambil data dari file DataClass.php
require_once"DataClass.php";

//ambil class dari file Dataclass.php
$DataClass = new Data("Fiqrian",null);

//ambil function dari Dataclass.php(This Keyword)
$guest = "budi";
$fiqrian = new Data("Fiqrian",null);
$fiqrian->nama ="Fiqrian";
$fiqrian->SayHello($guest);

//ambil function dan method diisi null (This Keyword)
$Citra = new Data("Fiqrian",null);
$Citra->nama ="Citra";
$Citra->SayHello(null);

//ambil function dari Dataclass.php
$DataClass->fizzbuzz(1);

//panggil function info
$fiqrian->info();
$Citra->info();




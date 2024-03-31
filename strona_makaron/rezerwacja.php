<?php
$db=mysqli_connect('localhost', 'root', '','baza');
$data_rez = @$_POST['data_rez'];
$liczba_osob = @$_POST['liczba_osob'];
$telefon = @$_POST['telefon'];


$wynik=$db->query("INSERT INTO rezerwacje(data_rez, liczba_osob,telefon) VALUES('$data_rez',$liczba_osob,$telefon)");


  
$db->close();



?>
<?php
$name=$_POST['name'];
$vorname=$_POST['vname'];
$ausgabe=$name. ", ". $vorname ; // <-- Dollar
$datei=fopen("namen.txt","a");
$output=fwrite($datei,$ausgabe);
fclose($datei);
?>
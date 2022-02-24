<?php
session_start();
$link = new  mysqli("localhost","sitov44","123456789sS1","sitov4");

if($link->connect_errno){
echo "Ошибка в подклучение в db: $link->connect_error";
}
?>
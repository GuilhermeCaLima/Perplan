<?php

$servidorMySql = "localhost";
$usuarioMySql = "root";
$senhaMySql = "";
$bancoMySql = "perplan";

try{
    $PDO = new PDO('mysql:host=' . $servidorMySql . ';dbname=' . $bancoMySql, $usuarioMySql, $senhaMySql);
} catch (PDOException $erroDeExcessAoPDO) {
    header ("locaion: index.php");
}

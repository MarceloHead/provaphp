<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "atividade";

try {
    $connect = new PDO("mysql:host=". $host . ";dbname=". $dbname, $user, $pass);
} catch (Exception $err) {
    echo "erro de conexão";
}

?>
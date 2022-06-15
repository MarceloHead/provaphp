<?php

include_once('conn.php');

$titulo=$_POST['titulo'];
$descricao=$_POST['descricao'];

//preparando

$stmt = $connect->prepare("INSERT INTO posts(titulo, descricao) VALUES(:TITULO, :DESCRICAO)");

//trocando

$stmt->bindParam(':TITULO', $titulo);
$stmt->bindParam(':DESCRICAO', $descricao);

//executando
$stmt->execute()


?>
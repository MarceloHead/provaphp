<?php

include_once('conn.php');

$id = 2;
$titulo = "lala";
$descricao = "ashuahdiusahdasgha";

$stmt = $connect->prepare("UPDATE posts SET titulo = :titulo, descricao =:descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":titulo", $titulo);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();


echo "$titulo <br> $descricao";

?>
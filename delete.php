<?php

require('conn.php');

$stmt=$connect->prepare("DELETE FROM posts WHERE id=:ID");
$id = 2;
$stmt->bindParam(":ID", $id);
$stmt->execute();


?>
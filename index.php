<?php

include_once('conn.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="insert.php" method="POST">
    <label for="">Titulo</label>
    <div><input type="text" name="titulo"></div>
    <label for="">Descrição</label>
    <div><textarea name="descricao" id="" cols="30" rows="10"></textarea></div>
    <div><input type="submit" placehold="Enviar"></div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UnipeTickets</title>
   <link rel="stylesheet" href="menu.css">
</html>

<?php

 include_once("topo.php");
 include_once("menu.php");

 if(empty($_SERVER['QUERY_STRING'])){
    $var = 'conteudo.php';
    include_once("$var");
 }else{
    $pg = $_GET['pg'];
    include_once("$pg.php");
 }

 include_once("rodape.php");
 
 ?>

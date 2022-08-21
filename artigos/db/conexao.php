<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login_register_pure_coding";

try{
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  
 }catch(PDOException $erro){
     echo "Falha ao se conectar com o banco! ";
 }

?>
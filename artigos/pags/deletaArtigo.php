<?php
require('../db/conexao.php');

$dArtigo = $_GET['artigosCriados'];
$n = random_int(1, 999);
array_map('unlink', glob($dArtigo)); 

/* $arquivo = file_get_contents('artigoscriados.html'); 
$contents_array = explode(PHP_EOL, $arquivo);
echo "<pre>";
var_dump($contents_array);
echo "</pre>";
 */

//deleta artigo no banco

list($a, $b, $c, $d) = explode("/", $dArtigo); 
list($nome, $ext) = explode(".", $d);
$sql = $pdo->prepare("DELETE FROM artigos, titulos USING artigos INNER JOIN titulos WHERE artigos.id = titulos.artigoid AND nome=?");
$sql->execute(array($nome));

echo "<script>alert ('Artigo deletado com sucesso');
               window.location.href = ('../forms/form-deletaArquivo.php');
               </script>";
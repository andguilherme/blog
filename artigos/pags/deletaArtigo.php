<?php
$dArtigo = $_GET['artigosCriados'];
$n = random_int(1, 999);
array_map('unlink', glob($dArtigo));

/* $arquivo = file_get_contents('artigoscriados.html'); 
$contents_array = explode(PHP_EOL, $arquivo);
echo "<pre>";
var_dump($contents_array);
echo "</pre>";
 */

 echo "<script>alert ('Artigo deletado com sucesso');
               window.location.href = ('artigos.php');
               </script>";


?>


<?php
require('../db/conexao2.php');

?>

<?php
/* $sql = $pdo->prepare("SELECT cod_artigo FROM artigos ");
$sql->execute();
$dado = $sql->fetch(PDO::FETCH_ASSOC); 
$artigos = $dado['cod_artigo'];*/

$sqlA = "SELECT * FROM artigos";
$result = mysqli_query($conn, $sqlA);


while ($artigos = mysqli_fetch_array($result)) {
    $a = utf8_encode($artigos['cod_artigo']);
    echo iconv('UTF-8', 'ISO-8859-1', $a);
}


?>





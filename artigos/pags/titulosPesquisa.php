<!-- 
<li><a href="artigo65.html"><i class="fas fa-search"></i>CULTIVAR</a></li>
<li><a href="artigo65.html"><i class="fas fa-search"></i>CSS</a></li>
<li><a href="artigo65.html"><i class="fas fa-search"></i>CAMPO DE LAVANDA</a></li>
<li><a href="artigo65.html"><i class="fas fa-search"></i>TULIPA</a></li>
<li><a href="artigo65.html"><i class="fas fa-search"></i>UAU! MARGARIDAS</a></li>
<li><a href="artigo65.html"><i class="fas fa-search"></i>VUEJS</a></li>
<li><a href="artigos/artigo930.html"><i class="fas fa-search"></i>Campo de Lavanda</a></li>
<li><a href="artigos/artigo821.html"><i class="fas fa-search"></i>Como fazer</a></li>
        -->
<?php
require('../db/conexao2.php');
?>

<?php
$sqlT = "SELECT * FROM titulos";
$result = mysqli_query($conn, $sqlT);

while ($titulos = mysqli_fetch_array($result)) {
    echo utf8_encode($titulos['titulo']);
}


?>
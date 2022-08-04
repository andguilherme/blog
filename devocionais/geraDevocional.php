<?php
if (isset($_POST['enviar'])) {
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $n = random_int(1, 999);
    $arquivo = 'devocional' . $n . '.html';
    $paragrafo1 = $_POST['texto'];
    $paragrafo2 = $_POST['p2'];
    $paragrafo3 = $_POST['p3'];
    $paragrafo4 = $_POST['p4'];
    if(strlen($paragrafo1) > 240){$texto_limite = substr($paragrafo1, 0, 240) . '...';}
    $permitido = array("jpg","png","jpeg","bmp");
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $data = $_POST['data'];
    list($data, $hora) = explode("T", $data);
    $hora_certa = $hora;
    list($ano, $mes, $dia) = explode("-", $data);
    $data_certa = $dia.'/'.$mes.'/'.$ano;
    $tag = $_POST['categoria'];
    $categoria = strtoupper($_POST['categoria']);
    $pasta = "imgs/";
    $tmp = $_FILES['imagem']['tmp_name'];
        $novoNome = uniqid().".$extensao"; 
    if (in_array($extensao, $permitido)){
        $pasta = "imgs/";
            if(!is_dir($pasta)) {
            mkdir($pasta, 0755);
            }
        $tmp = $_FILES['imagem']['tmp_name'];
        $novoNome = uniqid().".$extensao";  //uniqid cria um id único
            if (move_uploaded_file($tmp,$pasta.$novoNome)){  //move_uploaded_file move o arquivo para o servidor
               echo "<script>alert ('Devocional criada com sucesso');
               window.location.href = ('../artigos/pags/admin.php');
               </script>";

            }else {
            echo "Erro: não foi possível fazer o upload<br>";
            }
    }else{
        echo 'Erro: extensão ('.$extensao.') não permitida <br>';	
    }
//criar condição que se não estiver embranco, cria a pagina

file_put_contents($arquivo, '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>blog</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/artigo.css">
    <link rel="stylesheet" href="../css/pDevocional.css">
   

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <!--Header - menu-->
    <header>
        <div class="header-content">
            <div class="logo">
                <span id="titulo">Um amor de esposa</span>
                <span id="subt">por Kelly Cunha</span>
            </div>
            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                    <li><a href="../index.html"><i class="fas fa-home"></i>Início</a></li>
                    <li><a href="../artigos/pags/artigos.php" ><i class="fas fa-file-alt"> </i>Artigos</a></li>
                    <li><a href="../narracao.php"><i class="fab fa-youtube"></i> Narrações</a></li>
                    <li class="menu-selected"><a href="../devocional.php" class="text-menu-selected"><i class="fas fa-file-alt"></i> Devocionais</a></li>
                    <li><a href="#"><i class="fas fa-clone"></i> Serviços/Produtos</a></li>
                    <li><a href="#"><i class="fab fa-angellist"></i> Viagens</a></li>
                    <li><a href="../artigos/pags/admin.php"><i class="fas fa-cog"></i>Admin</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <div class="container-all" id="move-content">
    <div class="container-content">
    <article>
    <h1>' . $titulo . '</h1>
    <img src="'.$pasta.$novoNome.'" alt="">
    <strong><p>' . $subtitulo . '</p></strong>
    <p>' . $paragrafo1 . '</p>    
    <p>' . $paragrafo2 . '</p> 
    <p>' . $paragrafo3 . '</p> 
    <p>' . $paragrafo4 . '</p> 
    <div class="container-footer">	

        <footer>
            <div class="logo-footer">
               
            </div>
 
            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>

            <hr>
            <!-- <h4>© 2020 </h4> -->

        </footer>

    </div>

</div>
</div>
<script src="../js/script.js"></script>
</body>
</html>');

}

$art = fopen('../devocionaiscriadas.html', 'a+' ); 
fwrite($art, '
                    <div class="all '.$categoria.'">
                            <div class="post-img">
                                <img src="devocionais/'.$pasta.$novoNome.'" alt="post">
                                <span class="'.$tag.' category-name">'.$categoria.'</span>
                            </div>

                            <div class="post-content">
                                <div class="post-content-top">
                                    <span><i class="fas fa-calendar"></i>'.$data_certa.' - '.$hora_certa.'</span>
                                </div>
                                <h2>'.$titulo.'</h2>
                                 <p>'.$texto_limite.'</p>
                            </div>
                           <a href="devocionais/'.$arquivo.'"> <button type="button" class="read-btn">Leia Mais</button></a>
                        </div>

' .PHP_EOL); 
fclose($art);

$pesqdev = fopen('titulos_dev_pesq.html', 'a+' ); 
fwrite($pesqdev, '
        <li><a href="devocionais/'.$arquivo.'">'.$titulo.'</a></li>
       
' .PHP_EOL); 
fclose($pesqdev);




/* <?php
function gera_arquivo($nome) {
$arquivo = fopen($nome.'.html', 'a+' );
$a = file_get_contents('modelo.txt'); 
fwrite($arquivo, $a);
fclose($arquivo);
echo 'Gerado com sucesso!';
}
$n = random_int(1, 999);
gera_arquivo('artigo'.$n); */
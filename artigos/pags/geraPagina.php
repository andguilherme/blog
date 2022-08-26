<?php
require('../db/conexao.php');

if (isset($_POST['enviar'])) {
    $titulo = $_POST['titulo'];
    $n = random_int(1, 999);
    $arquivo = 'artigos/' . 'artigo' . $n . '.html';
    $paragrafo1 = $_POST['texto'];
    $paragrafo2 = $_POST['p2'];
    $paragrafo3 = $_POST['p3'];
    $paragrafo4 = $_POST['p4'];
    $permitido = array("jpg", "png", "jpeg", "bmp");
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $data = $_POST['data'];
    list($data, $hora) = explode("T", $data);
    $hora_certa = $hora;
    list($ano, $mes, $dia) = explode("-", $data);
    $data_certa = $dia . '/' . $mes . '/' . $ano;
    $categoria = strtoupper($_POST['categoria']);
    $pasta = "imgs/";
    $tmp = $_FILES['imagem']['tmp_name'];
    //$novoNome = uniqid() . ".$extensao";
    $novoNome = 'artigo' . $n . ".$extensao";
    if (in_array($extensao, $permitido)) {
        $pasta = "imgs/";
        if (!is_dir($pasta)) {
            mkdir($pasta, 0755);
        }
        $tmp = $_FILES['imagem']['tmp_name'];
       // $novoNome = uniqid() . ".$extensao";  //uniqid cria um id único
       $novoNome = 'artigo' . $n . ".$extensao";
        if (move_uploaded_file($tmp, $pasta . $novoNome)) {  //move_uploaded_file move o arquivo para o servidor
            echo "<script>alert ('Artigo criado com sucesso');
               window.location.href = ('admin.php');
               </script>";
        } else {
            echo "Erro: não foi possível fazer o upload<br>";
        }
    } else {
        echo 'Erro: extensão (' . $extensao . ') não permitida <br>';
    }



    //criar condição que se não estiver embranco, cria a pagina

    file_put_contents($arquivo, '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>blog</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../../css/principal.css">
    <link rel="stylesheet" href="../../../css/artigo.css">

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
                    <li><a href="../../../index.php"><i class="fas fa-home"></i>Início</a></li>
                    <li class="menu-selected"><a href="artigos.php" class="text-menu-selected"><i class="fas fa-file-alt"> </i>Artigos</a></li>
                    <li><a href="../../../narracao.php"><i class="fab fa-youtube"></i> Narrações</a></li>
                    <li><a href="../../../devocional.php"><i class="fas fa-file-alt"></i> Devocionais</a></li>
                    <li><a href="#"><i class="fas fa-clone"></i> Serviços/Produtos</a></li>
                    <li><a href="#"><i class="fab fa-angellist"></i> Viagens</a></li>
                    <li><a href="../../../../login_page/index.php"><i class="fas fa-cog"></i>Admin</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <div class="container-content">
    <article>
    <h1>' . $titulo . '</h1>
    <img src="' . '../' . $pasta . $novoNome . '" alt="">
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

    <script src="js/script.js"></script>
</body>
</html>');
}


$art = fopen('artigoscriados.php', 'a+');

// inserido div na pagina artigoscriados para aparecer na chamada da página de artigos.
/* fwrite($art, '
<div class="post" data-category="'.$categoria.'">

                        <div class="ctn-img">
                            <img src="'.$pasta.$novoNome.'" alt="">
                        </div>
                        <h2>'.$titulo.'</h2>
                        <span>'.$data_certa.' - '.$hora_certa.'</span>
                        <ul class="ctn-tag">
                            <li>'.$categoria.'</li>
                        </ul>
                        <a href="'.$arquivo.'"><button>Ler mais</button></a>

                    </div>

' .PHP_EOL); 
fclose($art); */

//inserindo mais um opção para artigo criado apacer na busca
/* $pesqart = fopen('titulosPesquisa.html', 'a+' ); 
fwrite($pesqart, '
        <li><a href="'.$arquivo.'"><i class="fas fa-search"></i>'.$titulo.'</a></li>
       
'); 
fclose($pesqart); */

$artigo = '
<div class="post" data-category="' . $categoria . '">

                        <div class="ctn-img">
                            <img src="' . $pasta . $novoNome . '" alt="">
                        </div>
                        <h2>' . $titulo . '</h2>
                        <span>' . $data_certa . ' - ' . $hora_certa . '</span>
                        <ul class="ctn-tag">
                            <li>' . $categoria . '</li>
                        </ul>
                        <a href="' . $arquivo . '"><button>Ler mais</button></a>

                    </div>

';
//grava os dados do artigo no banco
/* list($nomeArtigo, $ext) = explode('.', $arquivo); */
$nomeArtigo = 'artigo' . $n;
$sqlArtigo = $pdo->prepare("INSERT INTO artigos VALUES (null,?,?)");
$sqlArtigo->execute(array($nomeArtigo, $artigo));

//seleciona o id do artigo
$sqlId = $pdo->prepare("SELECT * FROM artigos WHERE nome=?");
$sqlId->execute(array($nomeArtigo));
$dadoId = $sqlId->fetch(PDO::FETCH_ASSOC);
$idArtigo = $dadoId['id'];

//grava os dados do titulo no banco
$pesqart = '<li><a href="' . $arquivo . '"><i class="fas fa-search"></i>' . $titulo . '</a></li>';
$sqlArtigo = $pdo->prepare("INSERT INTO titulos VALUES (null,?,?)");
$sqlArtigo->execute(array($idArtigo, $pesqart));

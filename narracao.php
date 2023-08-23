<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title> blog</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>

<body class="baudio">

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
                        <li><a href="index.php">
                                <i class="fas fa-home"></i>Início</a></li>
                        <li><a href="artigos/pags/artigos.php"> <i class="fas fa-file-alt"> </i>Artigos</a></li>
                        <li class="menu-selected"><a href="narracao.html" class="text-menu-selected"> <i
                                    class="fab fa-youtube"></i> Narrações</a></li>
                        <li><a href="devocional.php"> <i class="fas fa-file-alt"></i> Devocionais</a></li>
                        <li><a href="#"> <i class="fas fa-home"></i> Serviços/Produtos</a></li>
                        <li><a href="#"> <i class="fas fa-home"></i> Viagens</a></li>
                        <!--<li><a href="#"> <i class="fas fa-headset"></i> Contacto</a></li>-->
                        <li><a href="../login_page/index.php"><i class="fas fa-cog"></i>Admin</a></li>
                    </ul>
                </nav>

            </div>

            <!--  <div id="ctn-icon-search">
                <i class="fas fa-search" id="icon-search"></i>
            </div> -->



            <div id="icon-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="buscador">
        <div id="ctn-bars-search">
            <input type="text" id="inputSearch" placeholder="O que deseja buscar?">
        </div>

        <ul id="box-search">
            <li><a href="artigo1.html"><i class="fas fa-search"></i>HTML</a></li>
            <li><a href="artigo1.html"><i class="fas fa-search"></i>CSS</a></li>
            <li><a href="artigo1.html"><i class="fas fa-search"></i>JavaScript</a></li>
            <li><a href="artigo1.html"><i class="fas fa-search"></i>PHP</a></li>
            <li><a href="artigo1.html"><i class="fas fa-search"></i>NODEJS</a></li>
            <li><a href="artigo1.html"><i class="fas fa-search"></i>VUEJS</a></li>
            <li><a href="artigo1.html"><i class="fas fa-search"></i>Como fazer</a></li>
            <li><a href="artigo1.html"><i class="fas fa-search"></i>Como criar</a></li>
        </ul>
    </section>
    <!--<div id="cover-ctn-search"></div>-->




    <div class="container-all" id="move-content">


        <!-- <div class="blog-container-cover">
        <div class="container-info-cover">
         <h1>Amor de Esposa</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aliquam quis fuga beatae blanditiis assumenda.</p>
        </div> 
    </div> -->


        <main class="principal">
            <!-- <div class="nav-narracao">
            <span>Nome</span>
            <span>Tema</span>
            <span>Player</span>
            
        </div>
        <hr> -->
            <div class="caudios">
                <div class="audio">
                    <span class="tit-audio">Narração 1</span>
                    <span class="tit-audio">titulo 1</span>
                    <audio id="narrar" controls="controls">
                        <source src="media/Há um lugar.mp3" type="audio/mpeg">

                    </audio>
                </div>
                                          
                <?php include('artigos/pags/narracoescriados.html') ?>
        </main>
        
        <div class="container-footer">
 
            <footer>
                <div class="logo-footer">
                    <img src="img/kelly-logo.png" alt="">
                </div>

                <div class="redes-footer">
                    <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                    <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
                </div>

                <hr>
                <pre>andersonguilherme.com.br </pre>

            </footer>

        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>
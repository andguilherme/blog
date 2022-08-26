<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">


    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script>
        function pag() {

            var select = document.getElementById('ipart');
            var b = select.options[select.selectedIndex].value;
            window.location.href = (b);
        }
    </script>

</head>

<body onkeydown="myFunction(event)">

    <!--Header - menu-->
    <header>

        <div class="header-content">

            <div class="logo">
                <span id="titulo">Um amor de esposa</span>
                <span id="subt">por Kelly Cunha</span>

            </div>
            <div class="logo">

            </div>

            <div class="menu" id="show-menu">

                <nav>
                    <ul>
                        <li class="menu-selected"><a href="index.php" class="text-menu-selected">
                                <i class="fas fa-home"></i>Início</a></li>
                        <li><a href="artigos/pags/artigos.php"> <i class="fas fa-file-alt"> </i>Artigos</a></li>
                        <li><a href="narracao.php"> <i class="fab fa-youtube"></i> Narrações</a></li>
                        <li><a href="devocional.php"> <i class="fas fa-file-alt"></i> Devocionais</a></li>
                        <li><a href="#"> <i class="fas fa-clone"></i> Serviços/Produtos</a></li>
                        <li><a href="#"> <i class="fab fa-angellist"></i> Viagens</a></li>
                        <li><a href="../login_page/index.php"><i class="fas fa-cog"></i>Admin</a></li>
                    </ul>
                </nav>

            </div>

            <!--  <div id="ctn-icon-search">
                <i class="fas fa-search" id="icon-search"></i>
            </div> -->

        </div>

        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>


    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="O que deseja buscar?">
    </div>

    <ul id="box-search">
        <?php include( iconv('UTF-8', 'ISO-8859-1','artigos/pags/titulosPesquisa.html')) ?>
    </ul>

    <div id="cover-ctn-search"> </div>


    <!--Portada-->

    <div class="container-all" id="move-content">
        font-family: 'Imperial Script', cursive;

        <div class="blog-container-cover">
            <div class="container-info-cover">
                <h1>Um Amor de Esposa</h1>
                <!-- <span>POR KELLY CUNHA</span> -->
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aliquam quis fuga beatae blanditiis assumenda.</p>
        </div> -->
            </div>

            <div class="container-post">

                <!--  <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
                <input type="radio" id="LAVANDA" name="categories" value="LAVANDA">
                <input type="radio" id="CULTIVAR" name="categories" value="CULTIVAR">
                <input type="radio" id="TULIPAS" name="categories" value="TULIPAS">
                <input type="radio" id="MARGARIDAS" name="categories" value="MARGARIDAS">
                <input type="radio" id="NODEJS" name="categories" value="NODEJS">
                <input type="radio" id="VUE" name="categories" value="VUE">
                <input type="radio" id="CAMPO" name="categories" value="CAMPO"> -->

                <?php include('artigos/pags/categoriascriadas.html') ?>

                <section id="categ">
                    <span id="tit-categoria">Categorias ­&shy;</span>
                    <div class="container-category">

                        <label for="TODOS">TODOS</label>
                        <label for="LAVANDA">LAVANDA</label>
                        <label for="CULTIVAR">CULTIVAR</label>
                        <label for="TULIPAS">TULIPAS</label>
                        <label for="MARGARIDAS">MARGARIDAS</label>
                        <label for="FÉ">FÉ</label>
                        <label for="ORAÇÃO">ORAÇÃO</label>

                    </div>
                </section>

                <div class="posts" id="pri">

                    <?php
                    require('artigos/db/conexao2.php');
                   
                ?>

                    <?php

                    $sqlA = "SELECT * FROM artigos LIMIT 9";
                    $result = mysqli_query($conn, $sqlA);
                                     
                    
                    while ($artigos = mysqli_fetch_array($result)) {
                       
                        $a = utf8_encode($artigos['cod_artigo']);
                        $a = str_replace("artigos/", "artigos/pags/artigos/", $a);
                        echo iconv('UTF-8', 'ISO-8859-1', str_replace("imgs/", "artigos/pags/imgs/", $a));

                    }


                    ?>
                   

                <!--   <div class="post" data-category="LAVANDA">

                        <div class="ctn-img">
                            <img src="img/artigos/flores1.jpg" alt="">
                        </div>
                        <h2>Campo de Lavanda</h2>
                        <span>26 fevereiro 2020 - 1:32 am</span>
                        <ul class="ctn-tag">
                            <li>LAVANDA</li>
                        </ul>
                        <a href="artigos/artigo.html"><button>Ler mais</button></a>

                    </div>

                      <div class="post" data-category="CULTIVAR">

                        <div class="ctn-img"><img src="img/artigos/flores2.jpg" alt=""></div>
                        <h2>Como fazer</h2>
                        <span>26 fevereiro 2020 - 1:32 am</span>
                        <ul class="ctn-tag">
                            <li>CULTIVAR</li>
                        </ul>
                        <a href="artigos/artigo.html"><button>ler mais</button></a>

                    </div>

                    <div class="post" data-category="TULIPAS CULTIVAR">

                        <div class="ctn-img"><img src="img/artigos/flores3.jpg" alt=""></div>
                        <h2>Tulipas</h2>
                        <span>26 fevereiro 2020 - 1:32 am</span>
                        <ul class="ctn-tag">
                            <li>TULIPAS</li>
                            <li>CULTIVAR</li>
                        </ul>
                        <a href="#"><button>ler mais</button></a>

                    </div>

                    <div class="post" data-category="MARGARIDAS CULTIVAR">

                        <div class="ctn-img"><img src="img/artigos/flores4.jpg" alt=""></div>
                        <h2>Uau!😍 Margaridas</h2>
                        <span>26 fevereiro 2020 - 1:32 am</span>
                        <ul class="ctn-tag">
                            <li>MARGARIDAS</li>
                            <li>CULTIVAR</li>
                        </ul>
                        <a href="#"><button>ler mais</button></a>

                    </div>

                    <div class="post" data-category="CSS">

                        <div class="ctn-img"><img src="img/artigos/flores5.jpg" alt=""></div>
                        <h2>INDICADOR DE ARTIGOS</h2>
                        <span>26 fevereiro 2020 - 1:32 am</span>
                        <ul class="ctn-tag">
                            <li>CSS</li>
                        </ul>
                        <a href="#"><button>ler mais</button></a>

                    </div>

                    <div class="post" data-category="PHP">

                        <div class="ctn-img"><img src="img/artigos/flores6.jpg" alt=""></div>
                        <h2>ARTIGO %</h2>
                        <span>26 fevereiro 2020 - 1:32 am</span>
                        <ul class="ctn-tag">
                            <li>PHP</li>
                        </ul>
                        <a href="#"><button>ler mais</button></a>

                    </div> -->


                </div>
                <!--<div class="pag">
                <ul>
                    <li><a href="#pri">1</a></li>
                    <li><a href="#seg">2</a></li>
                </ul>
            </div><-->
                <!-- <div class="setNav">

                    <select name="part" id="ipart" onchange="pag()">
                        <option selected value="#">1</option>
                        <option value="artigos/pags/artigos.php">2</option>
                        <option value="artigos/pags/3.html">3</option>
                        <option value="#.html">4</option>
                        <option value="#.html">5</option>
                        <option value="#.html">6</option>
                        <option value="#.html">7</option>
                        <option value="#.html">8</option>
                        <option value="#.html">9</option>
                        <option value="#..html">10</option>
                    </select>
                    <a href="artigos/pags/2.html"> <i class='bx bxs-chevron-right'></i></a>

                </div> -->
                <div class="container-footer">

                    <footer>
                        <div class="logo-footer">
                            <img src="img/k-logo-t.png" alt="">
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
            <!--<script src="js/scroll.js"></script><-->
</body>

</html>
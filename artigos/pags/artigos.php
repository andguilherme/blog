<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Blog</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/principal.css">
    <link rel="stylesheet" href="../../css/blog.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <script>
        function pag() {

            var select = document.getElementById('ipart');
            var b = select.options[select.selectedIndex].value;
            window.location.href = (b);
        }
    </script>


</head>

<body>

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
                        <li><a href="../../index.html">
                                <i class="fas fa-home"></i>Início</a></li>
                        <li class="menu-selected"><a href="#" class="text-menu-selected"> <i class="fas fa-file-alt"> </i>Artigos</a></li>
                        <li><a href="../../narracao.php"> <i class="fab fa-youtube"></i> Narrações</a></li>
                        <li><a href="../../devocional.php"> <i class="fas fa-file-alt"></i> Devocionais</a></li>
                        <li><a href="#"> <i class="fas fa-clone"></i> Serviços/Produtos</a></li>
                        <li><a href="#"> <i class="fab fa-angellist"></i> Viagens</a></li>
                        <li><a href="../../../login_page/index.php"><i class="fas fa-cog"></i>Admin</a></li>
                    </ul>
                </nav>

            </div>

            <div id="ctn-icon-search">
                <i class="fas fa-search" id="icon-search"></i>
            </div>

        </div>

        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>


    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="O que deseja buscar?">
    </div>

    <ul id="box-search">
        <?php include('titulosPesquisa.php') ?>
    </ul>

    <div id="cover-ctn-search"> </div>


    <!--Portada-->

    <div class="container-all" id="move-content">


        <main id="container-paginas">
            <div class="container-post">


                <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
                <input type="radio" id="LAVANDA" name="categories" value="LAVANDA">
                <input type="radio" id="CULTIVAR" name="categories" value="CULTIVAR">
                <input type="radio" id="TULIPAS" name="categories" value="TULIPAS">
                <input type="radio" id="MARGARIDAS" name="categories" value="MARGARIDAS">
                <input type="radio" id="NODEJS" name="categories" value="NODEJS">
                <input type="radio" id="VUE" name="categories" value="VUE">
                <input type="radio" id="CAMPO" name="categories" value="CAMPO">

                <section id="categ">
                    <span id="tit-categoria">Categorias ­&shy;</span>
                    <div class="container-category">

                        <label class="category-title active" for="TODOS">TODOS</label>
                        <label class="category-title" for="LAVANDA">LAVANDA</label>
                        <label class="category-title" for="CULTIVAR">CULTIVAR</label>
                        <label class="category-title" for="TULIPAS">TULIPAS</label>
                        <label class="category-title" for="MARGARIDAS">MARGARIDAS</label>
                        <label class="category-title" for="NODEJS">NODEJS</label>
                        <label class="category-title" for="CAMPO">CAMPO</label>

                    </div>
                </section>

                <div class="posts" id="pri">

                    <?php include('artigoscriados.php') ?>
                </div>

                <div class="container-footer">

                    <footer>
                        <div class="logo-footer">
                            <img src="../../img/k-logo-t.png" alt="">
                        </div>

                        <div class="redes-footer">
                            <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                            <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
                        </div>

                        <hr>
                        <h4> </h4>

                    </footer>

                </div>

            </div>
    </div>
    </main>
    </div>
    <script src="../../js/script.js"></script>
    <script>
        a = document.querySelector('<?php echo $catId ?>');
    </script>
</body>

</html>
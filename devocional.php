<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Devocionais</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style-devocional.css">
    <link rel="stylesheet" href="css/principal.css">

    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body class="c-devocional">
    <header>

        <div class="header-content">

            <div class="logo">
                <span id="titulo">Um amor de esposa</span>
                <span id="subt">por Kelly Cunha</span>
            </div>
        
        <div class="menu" id="show-menu">

            <nav>
                <ul>
                    <li><a href="index.html">
                            <i class="fas fa-home"></i>Início</a></li>
                    <li><a href="artigos/pags/artigos.php"> <i class="fas fa-file-alt"> </i>Artigos</a></li>
                    <li><a href="narracao.php"> <i class="fab fa-youtube"></i> Narrações</a></li>
                    <li class="menu-selected"><a href="devocional.php" class="text-menu-selected"> <i
                                class="fas fa-file-alt"></i> Devocionais</a></li>
                    <li><a href="#"> <i class="fas fa-home"></i> Serviços/Produtos</a></li>
                    <li><a href="#"> <i class="fas fa-home"></i> Viagens</a></li>
                    <li><a href="../login_page/index.php"><i class="fas fa-cog"></i>Admin</a></li>
                </ul>
            </nav>

        </div>


        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>



    <div class="wrapper">


        <div class="header">
            <!--  <h1 class="main-title">Lista Dinâmica</h1> -->
            <input type="text" id="input" onkeyup="filter()" placeholder="O que deseja buscar?" value="">
            <i class="fas fa-search" id="icon-search" aria-hidden="true"></i>
        </div>
        <ul id="ul">
            <?php include('devocionais/titulos_dev_pesq.html')  ?>
           <!--  <li><a href="#">Me faz deitar em verdes pastos</a></li>
            <li><a href="#">Pescadores de Homens</a></li>
            <li><a href="#">Casamento Blindado</a></li>
            <li><a href="#">Edificar casa sobre a rocha</a></li> -->
        </ul>
    </div>
    <div class="container-all" id="move-content">
        <div class="main-container">
            <h2>Devocionais</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, velit.</p>
            <div class="filter-container">


                <div class="posts-collect">
                    <div class="posts-main-container">
                        <!-- single post -->
                        <div class="all escrituras">
                            <div class="post-img">
                                <img src="img/biblia-estrada.jpg" alt="post">

                            </div>

                            <div class="post-content">
                                <div class="post-content-top">
                                    <span><i class="fas fa-calendar"></i>01 Janeiro, 2XXX</span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae
                                    aspernatur
                                    possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni
                                    corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <button type="button" class="read-btn" onclick="javascript:window.history.back()">Leia Mais</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        
                        <div class="all politica">
                            <div class="post-img">
                                <img src="img/devocionais/dev6.jpg" alt="post">
                            </div>

                            <div class="post-content">
                                <div class="post-content-top">
                                    <span><i class="fas fa-calendar"></i>01 Janeiro, 2XXX</span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae
                                    aspernatur
                                    possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni
                                    corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <button type="button" class="read-btn">Leia Mais</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                       
                      
                        <?php include('devocionaiscriadas.html') ?>
                       
                        </div>
                        
                        <!-- end of single post -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS file -->
    <!-- <script src = "script-filtro.js"></script> -->
    <script src="js/script-busca.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Blog</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/principal.css">
    <link rel="stylesheet" href="../../css/style-devocional.css">

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
                        <li><a href="../../index.html">Início</a></li>
                        <li><a href="artigos.php">Artigos</a></li>
                        <li><a href="../../narracao.html"> Narrações</a></li>
                        <li><a href="../../devocional.php"> Devocionais</a></li>
                        <li><a href="#"> Serviços/Produtos</a></li>
                        <li><a href="#"> Viagens</a></li>
                        <li class="menu-selected"><a href="#" class="text-menu-selected">Admin</a>
                        </li>
                        <!--<li><a href="#"> <i class="fas fa-headset"></i> Contacto</a></li>-->
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
        <li><a href="artigos.html"><i class="fas fa-search"></i>CULTIVAR</a></li>
        <li><a href="artigos.html"><i class="fas fa-search"></i>CSS</a></li>
        <li><a href="artigos.html"><i class="fas fa-search"></i>CAMPO DE LAVANDA</a></li>
        <li><a href="artigos.html"><i class="fas fa-search"></i>TULIPA</a></li>
        <li><a href="artigos.html"><i class="fas fa-search"></i>UAU! MARGARIDAS</a></li>
        <li><a href="artigos.html"><i class="fas fa-search"></i>VUEJS</a></li>
        <li><a href="artigos.html"><i class="fas fa-search"></i>Como fazer</a></li>
        <li><a href="artigos.html"><i class="fas fa-search"></i>Como criar</a></li>
    </ul>

    <div id="cover-ctn-search"> </div>

    <main id="admin">

    <div class="configuracao">
        <select name="admin" id="iadmin" onchange="pag()" placeholder="Configurações">
            <option selected value="#">Criar Artigo</option>
            <option value="form-devocional">Criar Devocional</option>
            <option value="form-narracao.html">Criar Narracao</option>
        </select>
    </div>
    
	<form id="adm" action="geraPagina.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nome">Titulo:</label>
            <input type="text" id="nome" name="titulo" />
        </div>
        <div>
            <label for="data">Data:</label>
            <input type="date" id="data" name="data" />
        </div>
        <div>
            <label for="img-artigo">Imagem:</label>
            <input type="file" id="img-artigo" name="imagem" />
        </div>
        <div>
            <label for="categ-artigo">Categoria:</label>
            <input type="text" id="categ-artigo" name="categoria" />
        </div>
        <div>
            <label for="msg">P1:</label>
            <textarea id="msg" name="texto"></textarea>
        </div>
        <div>
            <label for="msg">P2:</label>
            <textarea id="msg" name="p2"></textarea>
        </div>
        <div class="button">
            <button type="submit" name="enviar">Salvar</button>
        </div>
        


    
    </form>	
    <!--<div class="pag">
                <ul>
                    <li><a href="#pri">1</a></li>
                    <li><a href="#seg">2</a></li>
                </ul>
                </div><-->
    </main>
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
   

    </script>
    <script src="../../js/script.js"></script>
  

</body>

</html>
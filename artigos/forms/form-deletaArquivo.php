<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../../index.php");
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Blog</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/principal.css">
    <link rel="stylesheet" href="../../css/style-devocional.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <script>
        function pag() {

            var select = document.getElementById('iadmin');
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
            <div class="log-user">
                <?php echo "<h1>Bem-vindo " . $_SESSION['username'] . "</h1>"; ?>
                <a href="../../../login_page/logout.php">Logout</a>
            </div>
            <div class="menu" id="show-menu" style="display:none;">

                <nav>
                    <ul>
                        <li><a href="../../index.php">Início</a></li>
                        <li><a href="artigos.php">Artigos</a></li>
                        <li><a href="../../narracao.php"> Narrações</a></li>
                        <li><a href="../../devocional.php"> Devocionais</a></li>
                        <li><a href="#"> Serviços/Produtos</a></li>
                        <li><a href="#"> Viagens</a></li>
                        <li class="menu-selected"><a href="#" class="text-menu-selected">Admin</a>
                        </li>
                        <!--<li><a href="#"> <i class="fas fa-headset"></i> Contacto</a></li>-->
                    </ul>
                </nav>
            </div>
            
        </div>

    

    </header>

       <main id="admin">

        <div class="configuracao">
            <select name="admin" id="iadmin" onchange="pag()" placeholder="Configurações">
                <option value="../pags/admin.php">Criar Artigo</option>
                <option value="form-devocional.php">Criar Devocional</option>
                <option value="#">Criar Narração</option>
                <option selected value="#">Deletar Artigo</option>
            </select>
        </div>

        <form id="adm" action="../pags/deletaArtigo.php" method="get" enctype="multipart/form-data">
        <h1>Deletar Artigo</h1>
            <div>
               <!--  <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome-narracao" required/> -->
            </div>
            <div>
                <!-- <label for="data">Titulo:</label>
                <input type="text" id="tit-narracao" name="tit-narracao" required/> -->
            </div>
            
            <div>
                <select name="artigosCriados" id="iadmin" >
                <option value='' disabled selected>Selecione o artigo</option>
                    <?php 
                    $pasta ='../pags/artigos/';
                    if (is_dir($pasta)){
                        $cdir = scandir($pasta);
                        foreach ( $cdir as $arquivo) { 
                        $caminho = $pasta.$arquivo;
                     echo "<option value='$caminho'>$arquivo</option>";
                      }

               }
                      ?>
                    
                </select>
                
            </div>

            <div class="button">
                <button type="submit" name="deletar">Deletar</button>
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
<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../../index.html");
}
?>

<?php 
header("Content-type: text/html; charset=utf-8");
if (isset($_POST['cadastrar'])) {
$cdevocional = mb_strtoupper($_POST['Cdevocional'],'UTF-8');
$tagdev = strtolower(trim($_POST['Cdevocional']));
$cordev = $_POST['cordevocional'];
echo "<script>alert ('categoria incluida com sucesso'); </script> ";

$categdev = fopen('devCategoriasCriadas.html', 'a+' ); 
fwrite($categdev, '
<option value="'.$tagdev.'">'.$cdevocional.'</option>

'); 
fclose($categdev);

$cordev = fopen('../../css/style-devocional.css', 'a+' ); 
fwrite($cordev, '
.'.$tagdev.' {
    background:'.$cordev.';
}

'.PHP_EOL); 
fclose($cordev);
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
                        <li><a href="../../index.html">Início</a></li>
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
                <option selected value="#">Gereciar Categoria</option>
                <option value="form-narracao">Criar Narração</option>
            </select>
        </div>

        <form id="adm" action=" " method="post" enctype="multipart/form-data">
        <h1>Gerenciar Categoria</h1>
             <div>
                <label for="Cdevocional">Categoria Devocional:</label>
                <input type="text" id="Cdevocional" name="Cdevocional" required/>
            </div>
            <div>
                <label for="cordevocional">Cor da Categoria:</label>
                <input type="color" id="cordevocional" name="cordevocional" required/>
            </div>
            </fieldset>
            <div class="button">
                <button type="submit" name="cadastrar">Salvar</button>
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
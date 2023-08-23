 <?php

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: ../../index.php");
    }
    ?>

 <!DOCTYPE html>
 <html lang="pt-br">

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
                         <li><a href="../../index.php"><i class="fas fa-home"></i>Início</a></li>
                         <li><a href="artigos.php"><i class="fas fa-file-alt"> </i>Artigos</a></li>
                         <li><a href="../../narracao.php"><i class="fab fa-youtube"></i> Narrações</a></li>
                         <li><a href="../../devocional.php"><i class="fas fa-file-alt"></i> Devocionais</a></li>
                         <li><a href="#"><i class="fas fa-clone"></i> Serviços/Produtos</a></li>
                         <li><a href="#"><i class="fab fa-angellist"></i> Viagens</a></li>
                         <li class="menu-selected"><a href="#" class="text-menu-selected"><i class="fas fa-cog"></i>Admin</a></li>
                         <!--<li><a href="#"> <i class="fas fa-headset"></i> Contacto</a></li>-->
                     </ul>
                 </nav>
             </div>

         </div>


     </header>

     <div class="container-all" id="move-content">

         <main id="admin">

             <div class="configuracao">
                 <select name="admin" id="iadmin" onchange="pag()">
                     <option value="../pags/admin.php">Criar Artigo</option>
                     <option selected value="#">Criar Devocional</option>
                     <option value="form-narracao.php">Criar Narracao</option>
                     <option value="form-deletaArquivo.php">Deletar Artigo</option>
                     <!-- <option value="gerenciar-categoria.php">Gerenciar Categoria</option> -->
                 </select>
             </div>

             <form id="adm" action="../../devocionais/geraDevocional.php" method="post" enctype="multipart/form-data">
                <h1>Criar Devocional</h1>
                 <div>
                     <label for="nome">Titulo:</label>
                     <input type="text" id="nome" name="titulo" required />
                 </div>
                 <div>
                     <label for="data">Data:</label>
                     <input type="datetime-local" id="data" name="data" required />
                 </div>
                 <div>
                     <label for="img-artigo">Imagem:</label>
                     <input type="file" id="img-artigo" name="imagem" required />
                 </div>
                 <div>
                     <!--  <label for="categ-artigo">Categoria:</label>
                     <input type="text" id="categ-artigo" name="categoria" /> -->
                     <label for="chk-categ">Categoria:</label>
                     <select name="categoria" id="chk-categ" onchange="pag()" required>
                     <?php include('devCategoriasCriadas.html')  ?>
                         
                     </select>
                     <script>
                         valor = document.querySelectorAll('chk-categ').value
                     </script>
                 </div>
                 <div>
                     <label for="sub">Subtitulo:</label>
                     <input type="text" id="sub" name="subtitulo"/>
                 </div>
                 <div>
                     <label for="msg">Texto:</label>
                     <textarea id="msg"  class="p1" name="texto" placeholder="insira o primero paragrafo" required></textarea>
                 </div>
                 <div>
                     <label for="msg"></label>
                     <textarea id="msg"class="p2" name="p2" placeholder="insira o segundo paragrafo"></textarea>
                 </div>
                 <div>
                     <label for="msg"></label>
                     <textarea id="msg" class="p3" name="p3" placeholder="insira o terceito paragrafo" style="display: none;"></textarea>
                 </div>
                 <div>
                     <label for="msg"></label>
                     <textarea id="msg" name="p4" placeholder="insira o quarto paragrafo" style="display: none;"></textarea>
                 </div>
                 <div>
                     <button type="button" name="addP" id="addP" sty>+</button>
                 </div>
                 <div class="button">
                     <button type="submit" name="enviar">Salvar</button>
                 </div>




             </form>

         </main>
     </div>



 </body>

 <!-- script para visualizar os paragrafos 3 e 4 -->
 <script>
     let btnadd = document.querySelector("#addP");
     btnadd.addEventListener("click", function() {
         a = document.querySelectorAll('#adm');
         for (let i = 6; i < 9; i++) {
             a[0][i].style.display = 'block';
            // a[0][i].style.margin = '0px 14%';

         }


     })
 </script>






 </html>
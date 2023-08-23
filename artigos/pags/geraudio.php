<?php
if (isset($_POST['enviar'])) {
    $titulo = $_POST['tit-narracao'];
    $n = random_int(1, 999);
  /*   $arquivo = 'audio' . $n . '.html'; */
    $permitido = array("mp3","mpeg","mpeg4","wav");
    $extensao = pathinfo($_FILES['narracao']['name'], PATHINFO_EXTENSION);
    $nome = str_replace(" ", "_", $_POST['nome-narracao']);  
     $audiopasta = "media/";
    $tmp = $_FILES['narracao']['tmp_name'];
        $novoNome = $nome.".$extensao"; 
    if (in_array($extensao, $permitido)){
        $pasta = "../media/";
            if(!is_dir($pasta)) {
            mkdir($pasta, 0755);
            }
        $tmp = $_FILES['narracao']['tmp_name'];
        $novoNome = $nome.".$extensao";  //uniqid cria um id único
            if (move_uploaded_file($tmp,$pasta.$novoNome)){  //move_uploaded_file move o arquivo para o servidor
               echo "<script>alert ('narracao incluida com sucesso');
               window.location.href = ('admin.php');
               </script>";

            }else {
            echo "Erro: não foi possível fazer o upload<br>";
            }
    }else{
        echo 'Erro: extensão ('.$extensao.') não permitida <br>';	
    }
//criar condição que se não estiver embranco, cria a pagina

}

$narra = fopen('narracoescriados.html', 'a+' ); 
fwrite($narra, '
<div class="audio">
        <span class="tit-audio">'.$nome.'</span>
        <span class="tit-audio">'.$titulo.'</span>
    <audio id="narrar" controls="controls">
    <source src="artigos/media/'.$novoNome.'" type="audio/mpeg">

    </audio>
</div>

' .PHP_EOL); 
fclose($narra);

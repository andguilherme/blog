<?php
/* require('db/conexao.php'); */

if (isset($_POST['nome']) && isset($_POST['senha']) && !empty($_POST['nome']) && !empty($_POST['senha'])) {
    //receber dados vindo do post e limpar
    $nome = strtolower($_POST['nome']);
    $senha = strtolower($_POST['senha']);
    $senha_cript = sha1($senha);
    //verificar se existe o usuario
    $nomecadastrado = 'kelly';
    $senhacadastrada = '123';

    /*    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nome=? AND senha=? LIMIT 1");
    $sql->execute(array($nome, $senha_cript));
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
*/
 

    if ($nome == $nomecadastrado && $senha == $senhacadastrada) {
        header('location: ../artigos/pags/admin.html ');

    } else  {

        $erro = 'Usuario e senha invalidos ';
    }
}else{
    $erro = 'Entre com Usuario e senha';
}

function limparPost($dados)
{
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
}
?>
<br>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilo.css" <title>
    </title>
</head>

<body>
    
    <form method="post">
    <a href="javascript:window.history.back()" style="margin: 0;"><i class='bx bx-home'></i></a>
        <h2>Login</h2>
        <input type="text" name="nome" id="input_login" placeholder="Digite seu login" >

        <input type="password" name="senha" id="input_senha" placeholder="Digite sua senha" >
        <button type="submit" class="btn_login">Fazer login</button>
        <span style="color: red;"><?php if (isset($erro)) {
            echo $erro;
        }?> </span>

    </form>
</body>

</html>
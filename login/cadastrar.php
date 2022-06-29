<?php
require('db/conexao.php');

if (isset($_POST['input_login']) && isset($_POST['input_senha'])) {
    if (empty($_POST['input_login']) or empty($_POST['input_senha'])) {
        $erro_geral = "Todos os campos são obrigatorios!";
    } else {
        $nome = limparPost($_POST['nome']);
        $senha = limparPost($_POST['senha']);
        $senha_cript = sha1($senha);
    }

    if (!isset($erro_geral)) {
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nome=? LIMIT 1");
        $sql->execute(array($nome));
        $usuario = $sql->fetch();
        $token = "";
        if (!$usuario) {
            $sql = $pdo->prepare("INSERT INTO usuarios VALUES (null,?,?,?)");
            if ($sql->execute(array($nome, $senha, $senha_cript, $token))) {
                header('location: index.php');
            }
        } else {
            $erro_geral = "usuario ja cadastrado";
        }
    }
}

function limparPost($dados)
{
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css" <title>
    </title>
</head>

<body>
    <form method="POST">
        <h2>Cadastrar</h2>
        <?php if (isset($erro_geral)) {
            echo $erro_geral;
        } ?>
        <input type="text" name="input_login" id="input_login" placeholder="Digite seu login" required>
        <input type="password" name="input_senha" id="input_senha" placeholder="Digite sua senha" required>
        <button type="submit" class="btn_login">Cadastrar</button>


    </form>
</body>

</html>
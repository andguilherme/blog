<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login_register_pure_coding";
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
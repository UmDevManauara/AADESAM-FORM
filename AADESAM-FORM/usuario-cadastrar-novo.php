<?php
var_dump($_POST);
include("config.php");
$nomeLogin = $_POST["nome-login"];
$emailLogin = $_POST["email-login"];
$senhaLogin = md5($_POST["senha-login"]);
$tipoLogin = 2;
$sql = "INSERT INTO acessousuarios (nome, email, senha, tipo) VALUE ('{$nomeLogin}','{$emailLogin}','{$senhaLogin}','{$tipoLogin}')";
$res = $conexao->query($sql);
if ($res == true) {
    print "<script>alert('cadastro com sucesso');</script>";
    // print "<script>location.href='?page=listar'listar;</script>";
} else {
    print "<script>alert('Não foi possivel cadastrar');</script>";
    // print "<script>location.href='?page=listar'listar;</script>";
}

<?php
    session_start();
    if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))) {
        print "<script>location.href='index.php';</script>";
    }
    include('config.php');
$email = $_POST["email"];
$senha = $_POST["senha"];
$sql = "SELECT * FROM usuarios
        WHERE email = '{$email}'
        AND senha = '{$senha}'";

$res = $conexao->query($sql) or die($conexao->error);
$row = $res->fetch_object();
$qtd = $res->num_rows;

if ($qtd > 0) {
    $_SESSION["email"] = $email;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["tipo"] = $row->tipo;
    print "<script>location.href='dashboard.php';</script>";
} else {
    print
        "<script>alert('Email ou senha incorreto(s)');</script>";
    print
        "<script>location.href='index.php';
    </script>";
}
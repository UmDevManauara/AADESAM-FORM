<?php
    session_start();
    if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))) {
        print "<script>location.href='index.php';</script>";
    }
    include('config.php');
$email = $_POST["email"];
$senha = $_POST["senha"];

switch ($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUE ('{$nome}','{$email}','{$senha}','{$data_nasc}')";
        $res = $conexao->query($sql);
        if($res==true){
            print "<script>alert('cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar'listar;</script>";
        }else{
            print "<script>alert('Não foi possivel cadastrar');</script>";
            print "<script>location.href='?page=listar'listar;</script>";
        }
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET 
                        nome='{$nome}',
                        email='{$email}',
                        senha='{$senha}',
                        data_nasc='{$data_nasc}'
                    WHERE id =". $_REQUEST["id"];
        

        $res = $conexao->query($sql);

        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar'</script>";
        }else{
            print "<script>alert('Não foi possivel editar');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
        $res = $conexao->query($sql);
        if($res==true){
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar'</script>";
        }else{
            print "<script>alert('Não foi possivel excluir');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;
    default:
        # code...
        break;
}
?>
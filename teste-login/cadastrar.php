
        <?php 
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
        
        ?>
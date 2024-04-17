<h1>testando conexao com banco de dados</h1>

<!-- declaração do servidor -->
<?php 
//precisa ser nessa ordem!
$nomeServidor = "localhost";
$usuario =  "root";
$senha = "";
$bancodedados = "treino";



//declaro variavel que vai  conter minha conexao ou seja uma query (chamada com o servidor)
$conexao = new mysqli($nomeServidor, $usuario, $senha, $bancodedados);
    if($conexao ->connect_errno){
        echo "não foi possivel conectar";
    } else{
        echo "conectado com sucesso";
    }

//
?>
<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'aadesam');
    $conexao = new MySQLi(HOST,USER,PASS,BASE);
?>
<h1>Listar Usuarios</h1>
<?php 
    $sql = "SELECT *FROM usuarios";
    $resultado = $conexao->query($sql);
    
    $quantidade = $resultado ->num_rows;
    if($quantidade > 0){
        while($row = $resultado->fetch_object()){
            print "<tr>";
            print "<td>".$row ->id."</td>";      
            print "<td>".$row ->nome."</td>";
            print "<td>".$row ->email."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."'\"; class='btn btn-success'>Editar</button>
                    <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\"; class='btn btn-danger'>Excluir</button>";
            print "</tr> <br>";

        }

    }else{
        print "<p class='alert-danger'>Não encontrou resultados!</p>";
    }

?>
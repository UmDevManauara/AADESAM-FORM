<h1>Listar Usuarios</h1>
<?php 
    $sql = "SELECT *FROM usuarios";
    $resultado = $conexao->query($sql);
    $quantidade = $resultado ->num_rows;
    if($quantidade > 0){
        print "<table class ='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";      
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Data Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $resultado->fetch_object()){
            print "<tr>";
            print "<td>".$row ->id."</td>";      
            print "<td>".$row ->nome."</td>";
            print "<td>".$row ->email."</td>";
            print "<td>".$row ->data_nasc."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."'\"; class='btn btn-success'>Editar</button>
                    <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false;}\"; class='btn btn-danger'>Excluir</button>";
            print "</tr>";

        }

    }else{
        print "<p class='alert-danger'>Não encontrou resultados!</p>";
    }

?>
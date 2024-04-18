<?php
if (empty($_SESSION)) {
    print "<script>alert('Acesso não autorizado');</script>";
    print "<script>location.href='index.php';
    </script>";
}
?>
<div class="container-fluid">>
    <h1>Minhas Inscrições</h1>
    <?php
    $nome = 'Matheus Alves Barros';
    print "<p>seu nome é ". $_SESSION["nome"]."</p>";
   
    $sql = "SELECT * FROM teste
         WHERE nome = '{$nome}'";
    $resultado = $conexao->query($sql);
    $quantidade = $resultado->num_rows;
    var_dump($sql);
    if ($quantidade > 0) {
        print "A tabela foi conectada";

        print "<table class ='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Estado</th>";
        print "<th>Concurso</th>";
        print "<th>Vaga</th>";
        print "<th>Ponto(s)</th>";
        print "</tr>";
        while ($row = $resultado->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>" . $row->estado. "</td>";
            print "<td>" . $row->concurso . "</td>";
            print "<td>" . $row->vaga . "</td>";
            print "<td>" . $row->contador . "</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=" . $row->id . "'\"; class='btn btn-success'>Editar</button>
                <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "'}else{false;}\"; class='btn btn-danger'>Excluir</button>";
            print "</tr>";
        }
    } else {
        print "<p class='alert-danger'>Não encontrou resultados!</p>";
    }

    ?>
</div>
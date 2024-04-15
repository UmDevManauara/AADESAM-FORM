<h1>Editar Usuários</h1>
<?php 
 $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

 $resultado = $conexao->query($sql);
 $row = $resultado->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name = "acao" value="editar">
    <input type="hidden" name="id" value="<?= $row->id; ?>">
    <div class="mb-3">
        <label for="Nome">Nome</label>
        <input type="text" name="nome" id="inome" value="<?= $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="iemail" value="<?= $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="isenha" required class="form-control">
    </div>
    <div class="mb-3">
        <label for="data_nasc">Datade Nascimento</label>
        <input type="date" name="data_nasc" id="idata_nasc" value = "<?= $row->data_nasc; ?>" class="form-control">
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>
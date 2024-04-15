<h1>Novo Usuario</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name = "acao" value="cadastrar">
    <div class="mb-3">
        <label for="Nome">Nome</label>
        <input type="text" name="nome" id="inome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="iemail" class="form-control">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="isenha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="data_nasc">Datade Nascimento</label>
        <input type="date" name="data_nasc" id="idata_nasc" class="form-control">
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>
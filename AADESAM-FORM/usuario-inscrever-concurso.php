<?php
if (empty($_SESSION)) {
    unset($_SESSION["email"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["tipo"]);
    print "<script>alert('Acesso não autorizado');</script>";
    print "<script>location.href='index.php';
     </script>";
};
?>
<div class="container-fluid">
    <div>
        <?php
        // echo "<p>" . var_dump($_POST) . "</p>";
        ?>
    </div>
    <form class="row g-3" action="usuario-salvar-concurso.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <h1>Faça sua inscrição</h1>
        <div class="mb-3">
            <label for="nome-form" class="form-label">Seu Nome:</label>
            <input type="text" class="form-control" id="inome-form" name="nome-form" placeholder="digite seu nome...">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="estado">Seu estado</label>
            <select class="form-select" id="estado" name="estado" required>
                <option selected value="">Escolha...</option>
                <option value="AM">Amazonas</option>
                <option value="PA">Pará</option>
                <option value="SP">São Paulo</option>
            </select>
        </div>

        <!-- <div class="input-group mb-3">
                <label class="input-group-text" for="concurso">Cidade</label>
                <select class="form-select" id="concurso" name="concurso" required>
                    <option selected value="">Escolha...</option>
                    <option value="PSS">PSS Salad Digital</option>
                    <option value="ACA">AADESAM Concurso Amazonas</option>
                    <option value="ACSP">AADESAM Concurso Sao Paulo</option>
                </select>
            </div> -->

        <div class="input-group mb-3">
            <label class="input-group-text" for="concurso">Concurso</label>
            <select class="form-select" id="concurso" name="concurso" required>
                <option selected value="">Escolha...</option>
                <option value="PSS">PSS Salad Digital</option>
                <option value="ACA">AADESAM Concurso Amazonas</option>
                <option value="ACSP">AADESAM Concurso Sao Paulo</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="vaga">Vaga</label>
            <select class="form-select" id="concurso" name="vaga" required>
                <option selected value="">Escolha...</option>
                <option value="medico">Médico</option>
                <option value="Analista">Analista de Sistema</option>
                <option value="Desenvolvedor">Programador</option>
            </select>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" name="trabalhou">
            <label class="form-check-label" for="trabalhou">Já trabalhou na Área?</label>
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="faculdade">Possue ensino superior?</label>
            <input class="form-check-input" type="checkbox" role="switch" name="faculdade">

        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" name="doutorado">
            <label class="form-check-label" for="doutorado">Possue doutorado?</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="reset">Limpar</button>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
</div>
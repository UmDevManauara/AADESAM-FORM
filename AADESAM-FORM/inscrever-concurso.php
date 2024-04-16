<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container-fluid">
        <div>
            <?php
            echo "<p>" . var_dump($_POST) . "</p>";
            ?>
        </div>
        <form class="row g-3" action="<?= $_SERVER['PHP_SELF']?>" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            <h1>Faça sua inscrição</h1>

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
                <label class="form-check-label" for="trabalhou" >Já trabalhou na Área?</label>
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="faculdade">Possue ensino superior?</label>
                <input class="form-check-input" type="checkbox" role="switch" name="faculdade">

            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="doutorado">
                <label class="form-check-label" for="doutorado" >Possue doutorado?</label>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="reset">Limpar</button>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>


    </div>

</body>

</html>
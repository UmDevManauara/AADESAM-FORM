<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- <style>
    body {
        background-color: #F2F2F2;
    }
    .login{
      width: 100%;
      height: 100vh;
      align-items: center;
      justify-content: center;
      display: flex;
    }

 
    </style> -->


</head>
<body>
<div class="container">
<h1>Acesso Restrito</h1>
    <form action="login.php" method="POST">
        <div class="mb-3">
            <label for="usuario">usuario</label>
            <input type="text" name="usuario"  class="form-control">
        </div>
        <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha"  class="form-control">
        </div>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
</div>






    <!-- <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg- 4 offset - 4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Acesso Restrito</h3>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST"></form>
                            <div>
                                <div class="mb-3">
                                    <label for="usuario"> Usuário</label>
                                    <input type="text" name="usuario" id="iusuario" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" id="isenha" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                     <button type="submit" class="btn btn-primary">Logar</button>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div> -->

</body>

</html>
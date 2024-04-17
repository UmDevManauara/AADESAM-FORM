<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Inserindo dados no banco de dados</h1>

<h2>dados para a tabela</h2>

<form action="manipulacao-dados.php" method="post">
    
    <label for="numero">insira um dado numero para a tabela:</label>
    <input type="number" name="numero" id="numero">
    <input type="submit" name="submit" value="Enviar">
</form>
<?php 
echo "<p></p>";
var_dump($_POST);

$variavel = ($_POST['numero']);

if ($variavel > 5){
    echo "<p>$variavel é maior que 5</p>";
    
}else{
    echo "<p>$variavel é menor que 5</p>";
}
echo " <p>$variavel</p>";

?>
</body>
</html>
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

<form action="capturando-dados-post.php" method="post">
    
    <label for="nome">insira um dado Nome para a tabela:</label>
    <input type="text" name="nome" id="nome">
    <input type="submit" name="submit" value="Enviar">
</form>
<?php 

if(isset($_POST['submit'])){
    $variavel = $_POST['nome'];
    echo "<p>a variavel que voce digitou foi $variavel</p>";
}else{
echo "<p>digite algum dado.</p>";
}
?>
</body>
</html>
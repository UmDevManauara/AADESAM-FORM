<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inserindo dados no banco de dados</h1>
    <h2>Comparando numeros</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="numero1">numero 1:</label>
        <input type="number" name="numero1" id="numero1">
        <br>
        <label for="numero2">numero2:</label>
        <input type="number" name="numero2" id="numero2">
        <br>
       //
    
    <?php
    $variavel1 = $_POST['numero1'];
    $variavel2 = $_POST['numero2'];
    
   if   // 1 regra: se X é maior y faça ISSO, senão ISSO:
        ($variavel1 > $variavel2){
        echo "<p>$variavel1 é maior que o $variavel2</p>";

    } // 1 regra: se x é menor y faça ISSO, senão ISSO:
        else if($variavel1 < $variavel2){
        echo "<p>$variavel1 é menor que o $variavel2</p>";
    }
    
    if //3 regra: se X é iguala y
        ($variavel1 == $variavel2){
        echo "<p>o primeiro numero:<strong>$variavel1</strong> é igual ao valor do segundo numero:<strong>$variavel2</strong></p>";
    }

    ?>


    <h2>Comparando strings</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="string1">string 1:</label>
        <input type="text" name="string1" id="string1">
        <br>
        <label for="string2">string 2:</label>
        <input type="text" name="string2" id="string2">
        <br>
        <input type="submit">
        

    </form>
    <?php
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    
    if //3 regra: se X é iguala y
        ($string1 == $string2){
        echo "<p>a primeira string:<strong>$string1</strong> é semelhante a segunda string:<strong>$string2</strong></p>";
    }//4 regra: se X é diferente de y
        else {
        echo "<p>a primeira string:<strong>$string1</strong> é DIFERENTE da segunda string:<strong>$string2</strong></p>";
    }
    var_dump($_REQUEST);
    //SOMANDO OS INPUTS
    echo "<h2>Somando os inputs</h2>";
    $conta = 0;


    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inserindo dados no banco de dados</h1>
     <h2>Comparando strings</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="string1">string 1:</label>
        <input type="text" name="string1" id="string1">
        <br>
        <input type="submit">
        

    </form>
    <?php
    $conta = 1;
    $resultado = $conta;
    if (empty($_POST['string1'])){
        echo "<p>DIGITE UM DADO</p>";
    }else{
        echo "<p>o contador deu ". ++$resultado."</p>";
       
    }

    
    // if //3 regra: se X é iguala y
    //     ($string1 == $string2){
    //     echo "<p>a primeira string:<strong>$string1</strong> é semelhante a segunda string:<strong>$string2</strong></p>";
    // }//4 regra: se X é diferente de y
    //     else {
    //     echo "<p>a primeira string:<strong>$string1</strong> é DIFERENTE da segunda string:<strong>$string2</strong></p>";
    // }
    var_dump($_REQUEST);
    //SOMANDO OS INPUTS
    // echo "<h2>Somando os inputs</h2>";
    // $conta = 0;


    ?>

</body>

</html>
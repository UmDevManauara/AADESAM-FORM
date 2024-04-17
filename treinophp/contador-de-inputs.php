<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .b{
        font-size: 1.2em;
        color: red;
    }
</style>

<body>
    <h1>PONTUAÇÃO POR INPUTS</h1>
     <h2>Comparando strings</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="string1">input 1:</label>
        <input type="text" name="string1" id="string1">
        <label for="string2">input 2:</label>
        <input type="text" name="string2" id="string1">
        <br>
        <input type="submit">

        

    </form>
    <?php
    
   
    $conta = 0;
    $resultado = $conta;
    if (empty($_POST['string1'])){

        echo "<p>DIGITE UM DADO PARA O PRIMEIRO INPUT</p>";

    }else{
        echo "<P>O INPUT 1 É: <strong class= \"b\">". $_POST['string1']."</strong></P>";
        ++$resultado;   
        echo "<p> a pontuação até aqui é ". $resultado."</p>";
       
    }
    if(empty($_POST['string2'])){

        echo "<p>DIGITE UM DADO PARA O SEGUNGO INPUT</p>";

    }
    else{
        echo "<P>o INPUT 1 É: <strong class= \"b\">". $_POST['string2']."</strong></P>";
        ++$resultado;
        echo "<p> a pontuação até aqui é ". $resultado."</p>";
        
    }       
    
    
    echo "<br><br><p>O RESULTADO FINAL É ". $resultado."</p>";
    ?>
    <BR></BR>
    <br>
    <?php 
     echo "<p>".var_dump($_REQUEST)."</p>";
    ?>

</body>

</html>
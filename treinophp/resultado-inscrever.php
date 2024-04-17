<div>
            <?php
            echo "<p>" . var_dump($_POST) . "</p>";
            ?>
        </div>

        <?php 
$conta = 0;
$resultado = $conta;

if (empty($_POST['trabalhou'])){

    echo "<p>DIGITE UM DADO PARA O PRIMEIRO INPUT</p>";

}else{
    echo "<P>O INPUT 1 É: <strong class= \"b\">". $_POST['trabalhou']."</strong></P>";
    ++$resultado;   
    echo "<p> a pontuação até aqui é ". $resultado."</p>";
   
}
if(empty($_POST['faculdade'])){

    echo "<p>DIGITE UM DADO PARA O SEGUNGO INPUT</p>";

}
else{
    echo "<P>o INPUT 1 É: <strong class= \"b\">". $_POST['faculdade']."</strong></P>";
    ++$resultado;
    echo "<p> a pontuação até aqui é ". $resultado."</p>";
    
}     

if(empty($_POST['doutorado'])){

    echo "<p>DIGITE UM DADO PARA O SEGUNGO INPUT</p>";

}
else{
    echo "<P>o INPUT 1 É: <strong class= \"b\">". $_POST['doutorado']."</strong></P>";
    ++$resultado;
    echo "<p> a pontuação até aqui é ". $resultado."</p>";
    
}    


echo "<br><br><p>O RESULTADO FINAL É ". $resultado."</p>";
?>

<button onclick="javascript:history.go(-1)">Voltar</button>
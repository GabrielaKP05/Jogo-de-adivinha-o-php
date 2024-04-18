<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img\adivinhacao.png" type="image/x-icon">
    <title>Jogo de Adivinhação</title>
</head>
<body>

<h1>Jogo de Adivinhação</h1>

<section class="formulario">

<form action="" method="post">
    <label for="numero">Insira aqui o seu chute de 1 a 30:</label>
    <input type="number" name="numero" min="1" max="30" id="numero">
    
    <input type="submit" value="Apostar">
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $numeroPc = rand (1, 30);
    $numeroJogador = $_POST["numero"];

    if($numeroPc == $numeroJogador){
        echo"Parabéns, você adivinhou o número corretamente";
}else{
    echo "Errou! O número era $numeroPc, tente novamente.";
}
}

?>

</section>

<footer><h3>Desenvolvido por Gabriela Padilha &copy;</h3></footer>
    
</body>
</html>
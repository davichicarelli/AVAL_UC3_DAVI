<?php
// ENTRADAS //
$mensagem = "";
$number = $_GET["number"];
$operação = $_GET["operação"];

// PROCESSAMENTO //
if ($operação == "soma") {
    for ($repetição = 1; $repetição <= 10; $repetição++) {
        $resultado = $number + $repetição;
        $mensagem .= "$number + $repetição = $resultado<br>";
    }
} else {
    for ($repetição = 1; $repetição <= 10; $repetição++) {
        $resultado = $number - $repetição;
        $mensagem .= "$number - $repetição = $resultado<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>
<body>
    <h1>Calculadora Realizado!</h1>
    <div id="resultado">
    
    <?php
    //SAÍDAS//
    echo $mensagem;
    ?>

    </div>

</body>
</html>
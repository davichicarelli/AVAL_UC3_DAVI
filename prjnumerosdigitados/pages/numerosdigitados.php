<?php
$number1 = filter_input(INPUT_GET,"number1", FILTER_VALIDATE_INT);
$number2 = filter_input(INPUT_GET,"number2", FILTER_VALIDATE_INT);
$number3 = filter_input(INPUT_GET,"number3", FILTER_VALIDATE_INT);

$pares = 0;
$impares = 0;

if ($number1 % 2 == 0) {
    $pares++;
} else {
    $impares++;
} if ($number2 % 2 == 0) {
    $pares++;
} else {
    $impares++;
} if ($number3 % 2 == 0) {
    $pares++;
} else {
    $impares++;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="./../css/estilo.css">
<!-- o .. server para sair da pasta -->
</head>
<body>
    <h1>Veja se seus números são ímpares ou pares:</h1>
    <div id="resultado">
    
    <?php
    //SAÍDAS//
    echo "Números digitados: ".$number1.", ".$number2.", ".$number3."<br>";
    echo "Números pares: ".$pares."<br>";
    echo "Números ímpares: ".$impares. "<br>";
    ?>

    </div>

</body>
</html>
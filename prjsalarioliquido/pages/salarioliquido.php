<?php
// ENTRADAS //
$valor = filter_input(INPUT_GET,"valor", FILTER_VALIDATE_FLOAT);
$horas = filter_input(INPUT_GET,"horas", FILTER_VALIDATE_FLOAT);
$percentual = 0.05;

$salarioLiquido = $horas * $valor;

if ($salarioLiquido >= 2000) {
$imposto = $salarioLiquido * $percentual;
$salarioLiquido = $salarioLiquido - $imposto;
$mensagem = "O valor do Salário Líquido é igual a R$".$salarioLiquido;
} else {
$mensagem = "O valor do Salário Líquido é igual a R$".$salarioLiquido;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Líquido</title>
    <link rel="stylesheet" href="./../css/estilo.css">
<!-- o .. server para sair da pasta -->
</head>
<body>
    <h1>Resultado do Cálculo do Salário Líquido</h1>
    <div id="resultado">
    
    <?php 
    // SAÍDA //
    echo "Imposto => R$".$imposto."<br>";
    echo $mensagem;
    ?>
    </div>

</body>
</html>
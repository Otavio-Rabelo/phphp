<?php

$horas = $_POST['horas'];

if($horas <= 10){
    $pontos = $horas * 2;
}
elseif($horas <= 20){
    $pontos = $horas * 5;
}
else{
    $pontos = $horas * 10;
}

$dinheiro = $pontos * 0.05;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Resultado</title>

</head>

<body>

<div class="container mt-5 text-center">

<h2>Resultado do Programa Vida Saudável</h2>

<p class="fs-4 mt-4">
Pontos obtidos:
<span class="badge text-bg-primary"><?php echo $pontos; ?></span>

</span>
</p>

<p class="fs-4">
Dinheiro faturado:
<span class="badge text-bg-success">R$ <?php echo $dinheiro; ?></span>

</span>
</p>

</div>

</body>

</html>
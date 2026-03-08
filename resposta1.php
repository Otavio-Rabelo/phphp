<?php

$peso = $_POST['campoPeso'];
$altura = $_POST['campoAltura'];

$imc = $peso / ($altura * $altura);

echo "Seu IMC é $imc" . "<br>";

if ($imc < 18.5) {
    echo "Abaixo do peso";
}
elseif ($imc >= 18.5 && $imc < 25) {
    echo "Peso ideal";
}
elseif ($imc >= 25 && $imc < 30) {
    echo "Sobrepeso";
}
elseif ($imc >= 30 && $imc < 40) {
    echo "Obesidade";
}
else {
    echo "Obesidade mórbida";
}

?>
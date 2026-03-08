<?php

$tipo = $_POST['tipoCarro'];
$dias = $_POST['dias'];
$km = $_POST['km'];

$total = 0;

if ($tipo == "popular") {

$total = $dias * 90;

if ($km <= 100) {
$total += $km * 0.20;
} else {
$total += (100 * 0.20) + (($km - 100) * 0.10);
}

}

if ($tipo == "luxo") {

$total = $dias * 150;

if ($km <= 200) {
$total += $km * 0.30;
} else {
$total += (200 * 0.30) + (($km - 200) * 0.25);
}

}

echo "Valor total: R$$total" . "<br>";


?>
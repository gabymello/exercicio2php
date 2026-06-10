<?php

$data = "10-06-2026";

$partes = explode("-", $data);

echo "Dia: " . $partes[0] . "<br>";
echo "Mes: " . $partes[1] . "<br>";
echo "Ano: " . $partes[2];

?>
<?php

$email = "gabriela@gmail.com";

$usuario = substr($email, 0, 8);
$dominio = substr($email, 9);

echo "Email: " . $email . "<br>";
echo "Usuario: " . $usuario . "<br>";
echo "Dominio: " . $dominio;

?>
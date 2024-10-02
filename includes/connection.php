<?php

$user = "root";
$server = "localhost";
$password = "";

$connection = new mysqli($server, $user, $password);

if($connection->connect_error) {
    die("Falha na conexão: " .  $connection->connect_error . "<br>");
} 

echo "Conexão realizada";
<?php
require_once('./includes/connection.php')

$sql = "CREATE TABLE contact (
    id INT UNSIGNED AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL ,
    lastname VARCHAR(30),
    phone VARCHAR(30) NOT NULL,
    email VARCHAR(30),
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    primary key(id)
    )";

$connection->select_db('contact');

if($connection->query($sql)) {
    echo "Tabela contact criada com sucesso. <br>";
} else {
    echo "erro na criação da tabela: " . $connection->error;
}

$connection->close();

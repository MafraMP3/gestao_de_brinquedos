<?php

$host = "localhost";
$password = "";
$user = "root";
$database = "crud_brinquedos";

$conn = new mysqli($host,$user,$password,$database,3306);

if ($conn -> connect_error){
    die("Erro na conexão" . $conn->connect_error);
    }
<?php

$host = "localhost";
$password = "";
$user = "root";
$database = "crud_brinquedos";

$conn = new mysqli($host,$user,$password,$database,6608);

if ($conn -> connect_error){
    die("Erro na conexão" . $conn->connect_error);
    }
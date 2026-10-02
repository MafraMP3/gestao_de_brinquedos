<?php

$host = "localhost";
$passowrd = "";
$user = "root";
$database = "crud_briquedos";

$conn = new mysqli($host,$user,$password,$database,6608);

if ($conn -> connect_error){
    die("Erro na conexão");
    }
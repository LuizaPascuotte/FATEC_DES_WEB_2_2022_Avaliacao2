<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="albuMusical";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: ".$mysqli->error);
}
?>
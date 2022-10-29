<?php

include('conexao.php');
include('validacao_users.php');

    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
        header("location: index.php");
        exit;
    }

    $sql_code = "INSERT INTO musicas (nomeMusica, cantorBanda)
    VALUES ('".$_POST['nomeMusica']."','".$_POST['cantorBanco']."')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    if ($conn->query($sql_code) == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_code . "<br>" . $conn->error;
    }

    $conn->close();
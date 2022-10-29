<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['idUsuario'] = $usuario['idUsuario'];
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $_POST['email'];
        
            header("Location: painel.php");


        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
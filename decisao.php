<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION) || (!$_SESSION['loggedin'] == TRUE))
    {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Seja bem-vindo, <b><?php echo htmlspecialchars($_SESSION["username"]);?> 
        <br>
        </b>Escolha uma para seguir</h1>
    </div>
    <p>

        <a href="painel.php" class="btn btn-primary">Cadastro de Musicas</a>
        <br><br>

        <a href="logout.php" class="btn btn-danger">Sair da conta</a>

        <br><br>

        <a href="lista_dados.php" class="btn btn-primary">Visualizar todos os dados</a>
        
    </p>
    
</body>
</html>
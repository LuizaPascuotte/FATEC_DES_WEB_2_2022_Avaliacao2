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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Bem vindo ao Painel, <?php $_SESSION['username'] ?></h1>

    <div class="wrapper">
        <h2>Cadastrar</h2>
        <p>Favor inserir os dados a seguir.</p>
        <form action="insert.php" method="post">
            <div class="form-group">
                <label>Nome musica</label>
                <input type="text" name="nomeMusica" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Cantor ou Banda</label>
                <input type="text" name="CantorBanda" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            <a href="decisao.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>    
</body>
</html>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>
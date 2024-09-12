<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
    <?php
        include('iniciasessao.php');
        if(empty($_SESSION['login'])){
            header("Location: login.php");
        }
        //session_destroy();
       
    ?>
</head>
<body>
    
    <h1>Você quer cadastrar uma cidade ou ver as cidades</h1>
    <?php
     if(!empty($_SESSION['login'])):
    ?>
    <button type="button"><a href="CadastroCidade.html">Cidades</a></button>
    <button type="button"><a href="ListaCidade.php">Ver Cidades</a></button>

    <h1>Você quer cadastrar um cliente ou ver a lista de clientes</h1>
    <button type="button"><a href="CadastroCliente.html">Clientes</a></button>
    <button type="button"><a href="ListaCliente.php">Ver Clientes</a></button>

    <h1>Sair</h1>
    <button type="button"><a href="logout.php">Sair</a></button>
    <?php
    echo"<li><a>Ola ".$_SESSION['login']['nome']."</a></li>";
        endif;
    ?>
    
</body>
</html>
<?php 
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id_cidade = $_POST['idcidade'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alteracadastra.css">
</head>
<body>
    <h1>Alterando Cliente</h1>
    <?php
        echo "<p>Id: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Senha: $senha</p>";
        echo "<p>Id Cidade: $id_cidade</p>";
        $sql = "update cliente set nome = '$nome', email = '$email', senha = '$senha', id_cidade = '$id_cidade' where id = 'id'";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados atualizados";
        else
            echo "Erro ao atualizar dados!\n" . mysqli_error($con);

    ?>
    <button><a href="ListaCliente.php">Tabela</a></button>
</body>
</html>
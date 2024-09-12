<?php
    include('includes/conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cliente
            WHERE email = '$email'";

    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['senha'] == $senha)
        {
            include('iniciasessao.php');
            $_SESSION['login'] = $row;
            header('Location: index.php'); //volto para a pagina inicial
        }else{
            echo "<h1>Senha inválida seu animal!
            Sua senha é ".$row['senha']."</h1>";
        }
    }else{
        echo "<h1>Usuario nao encontrado</h1>";
    }
?>
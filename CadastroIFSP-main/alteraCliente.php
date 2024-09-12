<?php
    include('includes/conexao.php'); 
    $id = $_GET['id'];
    $sql = "select * from cliente where id=$id"; 
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
    <link rel="stylesheet" href="Cadastro.css">
</head>
<body>
    <form action="alteraClienteExe.php" method="post">
        <fieldset>
            <legend>Alterar Cliente</legend>
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome'] ?>">
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?php echo $row['email'] ?>">
            </div>
            <div>
                <label for="senha">Senha: </label>
                <input type="text" name="senha" id="senha" value="<?php echo $row['senha'] ?>">
            </div>
            <div>
                <label for="idcidade">Cidade: </label>
                <input type="text" name="idcidade" id="idcidade" value="<?php echo $row['id_cidade'] ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
            
        </fieldset>
    </form>
</body>
</html>

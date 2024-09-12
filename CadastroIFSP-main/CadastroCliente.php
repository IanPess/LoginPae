<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Cadastro.css">
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">email: </label>
            <input type="text" name="email" id="nome">
        </div>
        <div>
            <label for="senha">senha: </label>
            <input type="password" name="senha" id="nome">
        </div>
        <div>
            <label for="ativo">Ativo: </label>
            <input type="checkbox" name="ativo" id="nome">
        </div>
        <div>
            <label for="cidade">Cidade: </label>
            <select name="cidade" id="cidade">
                <?php
                    include('includes/conexao.php');
                    $sql = "select * from cidade";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='". $row['id']."'>"
                        .$row['nomecidade']."/" . $row['estado']
                        ."</option>";
                    }
                ?>    
            </select>
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
        </fieldset>
    </form>
</body>
</html>
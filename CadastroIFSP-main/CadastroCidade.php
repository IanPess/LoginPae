<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        echo "<h1>Dados da cidade</h1>" . "Nome: $nome <br>" . "Estado: $estado <br>";

        //Insert into cidade() values()
        $sql = "insert into cidade (nome,estado)";
        $sql .= "values('".$nome."', '".$estado."')";
        echo $sql;

        //Executa comando no banco de dados
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados Cadastrados com Sucesso</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>" . mysqli_error($con);
        }
    ?>
</body>
</html>
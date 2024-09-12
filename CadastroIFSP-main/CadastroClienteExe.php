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
    
    // Coletando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $ativo = $_POST['ativo'];
    $cidade = $_POST['cidade'];

    // Convertendo $ativo para 'Sim' ou 'Não'
    if($ativo == 1){
        $ativo_str = 'Sim';
    } else if($ativo == 0) {
        $ativo_str = 'Não';
    }

    echo "<h1>Dados do cliente</h1>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    $sql = "insert into cliente(nome,email,senha,ativo, id_cidade)";
    $sql .= "values('".$nome."','".$email."', '".$senha."', '".$ativo."', '".$cidade."')";
    echo $sql;

    // Executando a query no banco de dados
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        echo "<h2>Dados Cadastrados com Sucesso</h2>";
    } else {
        echo "<h2>Erro ao cadastrar!</h2>" . mysqli_error($con);
    }
?>

</body>
</html>

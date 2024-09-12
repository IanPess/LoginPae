<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lista.css">
</head>
<body>
    <?php

        include('includes/conexao.php');
        $sql = "SELECT cli.id, cli.nome nomecliente, cli.email, cli.senha, cli.ativo, cid.nome nomecidade, cid.estado 
        FROM Cliente cli 
        LEFT JOIN Cidade cid ON cid.id = cli.id_cidade";

        //Executa a consulta
        $result = mysqli_query($con, $sql);
        

    ?>
    <h1>Consulta de Clientes</h1>
    <a href="CadastroCliente.html"></a>
    <table align="center" border="1" width="400">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ativo</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id']. "</td>";
            echo "<td>" . $row['nomecliente']. "</td>";
            echo "<td>" . $row['email']. "</td>";
            echo "<td>" . $row['senha']. "</td>";
            echo "<td>" . ($row['ativo'] == 1 ? 'Sim' : 'Não'). "</td>";
            echo "<td>" . $row['nomecidade']. "</td>";
            echo "<td>" . $row['estado']. "</td>";
            echo "<td><a href='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='deletaCliente.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
        }   
    ?>
    </table>
    
</body>
</html>
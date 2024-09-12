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
        $sql = "select * from cidade";
        //Executa a consulta
        $result = mysqli_query($con, $sql);
        

    ?>
    <h1>Consulta de Cidades</h1>
    <a href="CadastroCidade.html"></a>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id']. "</td>";
            echo "<td>" . $row['nome']. "</td>";
            echo "<td>" . $row['estado']. "</td>";
            echo "<td><a href='alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='deletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
    
</body>
</html>
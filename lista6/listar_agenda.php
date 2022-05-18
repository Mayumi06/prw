<?php
    include('conexao.php');
    $sql = 'SELECT * FROM agenda';
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    //print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar agenda</title>
</head>
<body>
    <h1>Listar agenda</h1>
    <table align = "center" border = "1" width =500>
        <tr>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Email</th>
            </tr>
        </tr>
        <?php
        while($row = mysqli_fetch_array ($result ))
        {
            echo "<tr>";
            echo "<td>" . $row['id_agenda'] . "</td>";
            //echo "<td><a href='altera_usuario.php?id_usuario=".$row['id_usuario']."'>" .$row['nome_usuario']. "</a></td>";
            echo "<td>" . $row['apelido_agenda'] . "</td>";
            echo "<td>" . $row['endereco_agenda'] . "</td>";
            echo "<td>" . $row['bairro_agenda'] . "</td>";
            echo "<td>" . $row['cidade_agenda'] . "</td>";
            echo "<td>" . $row['estado_agenda'] . "</td>";
            echo "<td>" . $row['telefone_agenda'] . "</td>";
            echo "<td>" . $row['celular_agenda'] . "</td>";
            echo "<td>" . $row['email_agenda'] . "</td>";
            //echo "<td><a href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>









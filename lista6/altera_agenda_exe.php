<?php
include('conexao.php');
$id_usuario = $_POST['id_agenda'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone =  $_POST['telefone'];

echo "<h1> Alteração de dados </h1>";
echo "<p> Nome Usuário: " . $nome . "<p>";

$sql = "UPDATE usuario SET 
    nome_agenda= '".$nome."',
    email_agenda= '".$email."',
    telefone_agenda = '".$telefone."'
    WHERE id_agenda=".$id_agenda;

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados alterados com sucesso <br>";
else 
    echo "Erro ao alterar no banco de dados: " .mysqli_error($con). "<br>";
?>

<a href = 'index.php'> Voltar</a>
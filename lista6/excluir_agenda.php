<?php
include ('conexao.php');

$id_usuario = $_GET['id_usuario'];
$sql = 'DELETE FROM usuario WHERE id_agenda = ' .$id_agenda;

echo "<h1> Exclusão de Usuário </h1>";
$result = mysqli_query($con, $sql);

if($result)
    echo "Registro excluído com sucesso<br>";
else
    echo "Erro ao tentar excluir usuário: " .mysqli_error($con)."<br>";
?>
<a href = 'listar_agenda.php'> Voltar</a><?php
include ('conexao.php');

$id_usuario = $_GET['id_agenda'];
$sql = 'DELETE FROM agenda WHERE id_agenda = ' .$id_agenda;

echo "<h1> Exclusão de Usuário </h1>";
$result = mysqli_query($con, $sql);

if($result)
    echo "Registro excluído com sucesso<br>";
else
    echo "Erro ao tentar excluir usuário: " .mysqli_error($con)."<br>";
?>
<a href = 'listar_agenda.php'> Voltar</a>

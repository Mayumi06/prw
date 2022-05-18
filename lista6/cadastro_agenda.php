<?php
include("conexao.php");
$nome_agenda= $_POST["txtNome"];
$apelido_agenda= $_POST["txtApelido"];
$bairro_agenda= $_POST["txtBairro"];
$cidade_agenda= $_POST["txtCidade"];
$estado_agenda= $_POST["txtEstado"];
$telefone_agenda= $_POST["txtTelefone"];
$celular_agenda= $_POST["txtCelular"];
$email_agenda= $_POST["txtEmail"];


echo "<P>Nome: " .$nome_agenda . "<br>";
echo "Apelido: " .$apelido_agenda ."<br>";
echo "Bairro: " .$bairro_agenda ."<br>";
echo "Cidade: " .$cidade_agenda ."</P>";
echo "Estado: " .$estado_agenda ."<br>";
echo "Telefone: " .$telefone_agenda ."<br>";
echo "Celular: " .$celular_agenda ."<br>";
echo "E-mail: " .$email_agenda ."<br>";

$sql= "INSERT INTO usuario (nome_agenda, apelido_agenda, bairro_agenda, cidade_agenda, estado_agenda, telefone_agenda, celular_agenda, email_agenda, telefone_agenda, )
VALUES (' " .$nome_agenda." ', ' ".$apelido_agenda. " ',' ".$email_agenda." ',' ".$bairro_agenda. " ', ' ".$cidade_agenda. " ',' ".$estado_agenda. " ',' ".$celular_agenda. " ',' ".$telefone_agenda. " ')";

$result= mysqli_query ($con, $sql);
if($result)
echo "Dados inseridos com sucesso";
else
echo "Erro ao inserir no banco de dados" .mysqli_error($con);


?>
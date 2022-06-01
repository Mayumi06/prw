<?php
include("conexao.php");
//Upload da foto
$fotoNome = $_FILES['foto'] ['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
//Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");
//Check extension
if(in_array($imageFileType,$extensions_arr))
//Upload file
if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$fotoNome)){
    $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
}
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

$sql= "INSERT INTO agenda (nome_agenda, apelido_agenda, bairro_agenda, cidade_agenda, foto_blob, estado_agenda, telefone_agenda, celular_agenda, email_agenda )
VALUES ('" .$nome_agenda."', '".$apelido_agenda. "','".$bairro_agenda."','".$cidade_agenda."','".$fotoBlob. "','".$estado_agenda. "','".$telefone_agenda. "','".$celular_agenda. "','".$email_agenda. "')";

$result= mysqli_query ($con, $sql);
if($result)
echo "Dados inseridos com sucesso";
else
echo "Erro ao inserir no banco de dados" .mysqli_error($con);


?>
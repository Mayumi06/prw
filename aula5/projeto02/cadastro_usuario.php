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
$nome_usuario= $_POST["txtNome"];
$email_usuario= $_POST["txtEmail"];
$fone_usuario= $_POST["txtTel"];

echo "<P>Nome: " .$nome_usuario. "<br>";
echo "E-mail: " .$email_usuario ."<br>";
echo "Telefone: " .$fone_usuario ."</P>";

$sql= "INSERT INTO usuario (nome_usuario, email_usuario, foto_blob, telefone_usuario)
VALUES ('" .$nome_usuario."', '".$email_usuario."','".$fotoBlob. "','".$fone_usuario. "')";

$result= mysqli_query ($con, $sql);
if($result)
echo "Dados inseridos com sucesso";
else
echo "Erro ao inserir no banco de dados" .mysqli_error($con);


?>
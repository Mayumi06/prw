<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario ='.$id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Alteracao do usuario - IFSP</h1>
<div id="teste">
<form action="altera_usuario_exe.php" method="post">
Nome: <input type="text" name="nome" value = "<?php echo $row ['nome_usuario'] ?>" size="50"><br>
E-mail: <input type="text" name="email" value = "<?php echo $row ['email_usuario'] ?>" size="50"><br>
Telefone: <input type="text" name="telefone" value = "<?php echo $row ['telefone_usuario'] ?>" size="30"><br>
<input name = "id_usuario" type = "hidden" value = "<?php echo $row['id_usuario']?>"> 
<input type="submit" value="enviar">
</form>
</body>
</html>
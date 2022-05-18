<?php
    include('conexao.php');
    $id_usuario = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda='.$id_agenda;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Alteracao da agenda</h1>
<div id="teste">
<form action="altera_usuario_exe.php" method="post">
Nome: <input type="text" name="nome" value = "<?php echo $row ['nome_agenda'] ?>" size="50"><br>
E-mail: <input type="text" name="email" value = "<?php echo $row ['email_agenda'] ?>" size="50"><br>
Telefone: <input type="text" name="telefone" value = "<?php echo $row ['telefone_agenda'] ?>" size="30"><br>
<input name = "id_usuario" type = "hidden" value = "<?php echo $row['id_agenda']?>"> 
<input type="submit" value="enviar">
</form>
</body>
</html>
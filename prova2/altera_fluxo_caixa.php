<?php
   include('conexao.php');
   $id_usuario = $_GET['id_fluxo'];
   $sql = 'SELECT * FROM fluxo where id_fluxo='.$id_fluxo;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fluxos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro de Fluxos  - IFSP</h1>
    <div id="teste">
        <form method="post" action="altera_fluxo_caixa_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <legend>Cadastro</legend>
                <div>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="text" id="data" name="data" value="<?php echo $row['data_fluxo']?>" placeholder="Data:">
                </div>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" value="<?php echo $row['valor_fluxo']?>" placeholder="Valor:">
                </div>
                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="text" id="historico" name="historico" value="<?php echo $row['historico_fluxo']?>" placeholder="Historico:">
                </div>
                <div>
                <td>Cheque:</td>
    <td><select name="estado" <?php echo $row['cheque_fluxo']?> ><br>>
        <option value="sim">sim</option>
        <option value="nao">nao</option>
    </select>
</td> 
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'> Voltar</a>
                </div>
                <input name="id_fluxo" type="hidden" value="<?php echo $row['id_fluxo']?>">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
<?php
    include('conexao.php');
    $id_fluxo = $_POST['id_fluxo'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
        
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Data: " . $data . "<p>";    
	
	$sql = "UPDATE usuario SET
            data_fluxo='".$data."',
            valor_fluxo='".$valor."',
            historico_fluxo='".$historico."'
            WHERE id_fluxo=".$id_fluxo;
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
<a href='index.php'> Voltar</a>
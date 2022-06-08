<?php
    include('conexao.php');
    
    $data = $_POST['data']; 
    $valor = $_POST['valor']; 
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    echo "<h1> Cadastro de Fluxos</h1>";
    echo "<p> Data: " . $data . "<br>";
    echo "Valor: " . $valor . "<br>";
    echo "Historico: " . $historico . "</p>";
    echo "Cheque: " . $cheque . "</p>";
	
	$sql = "INSERT INTO fluxo_caixa (data_fluxo,valor_fluxo,historico_fluxo, cheque_fluxo) 
	        VALUES ('".$data."','".$valor."','".$historico."','".$cheque."')";
	//echo $sql;
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>
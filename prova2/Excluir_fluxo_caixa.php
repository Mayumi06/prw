<?php
    include('conexao.php');
    
	$id_fluxo = $_GET['id_fluxo'];

    $sql = 'DELETE FROM fluxo WHERE id_fluxo='.$id_fluxo;
    
	echo "<h1> Exclusão de Fluxo </h1>";
	$result = mysqli_query($con, $sql);
	
	if($result)
		echo "Fluxo excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir fluxo: ".mysqli_error($con)."<br>";
  
?>
<a href='listar_fluxo_caixa.php'> Voltar</a>
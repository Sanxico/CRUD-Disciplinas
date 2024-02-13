<?php

	require_once('config/con_db.php');

	$id = (int) $_GET['disciplina'];
	
	$codigo_disciplina = mysqli_real_escape_string($con,$_POST['codigo_disciplina']);
	$nome_disciplina  = mysqli_real_escape_string($con,$_POST['nome_disciplina']);
	$campus = mysqli_real_escape_string($con,$_POST['campus']);
	$unidade_academica = mysqli_real_escape_string($con,$_POST['unidade_academica']);
	$departamento = mysqli_real_escape_string($con,$_POST['departamento']);
	$carga_horaria = mysqli_real_escape_string($con,$_POST['carga_horaria']);
	$tipo = mysqli_real_escape_string($con,$_POST['tipo']);
	
	
	$sql_atualiza = "UPDATE disciplina SET id='$id', codigo_disciplina='$codigo_disciplina', nome_disciplina='$nome_disciplina', campus='$campus', unidade_academica='$unidade_academica', departamento='$departamento', carga_horaria='$carga_horaria', tipo='$tipo' ,id='$id' WHERE id='$id'";
	
	$result = mysqli_query($con, $sql_atualiza);
	
	//header("Location: listar_disciplinas.php");
	
	if ($result !== false) {
	
		?>
		<p>Disciplina atualizado com sucesso!</p>
		<p><a href="listar_disciplinas.php">&lt;&lt;&nbsp;Voltar</a></p>
		<?php
	
	}
	else {
		echo "<br />Erro atualizando dados: ".mysqli_error($con);
	}


?>
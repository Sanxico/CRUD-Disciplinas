<?php

	require_once("config/con_db.php");

	$id_disciplina = (int) $_GET['disciplina'];
	
	$id_disciplina = mysqli_real_escape_string($con, $id_disciplina); //nesse caso específico não é necessário
	
	$sql_disciplina = "SELECT * FROM disciplina 
					WHERE id='$id_disciplina'";
	
	if ($id_disciplina == 0) {
		die("Dados inválidos!");
	}
	
	$result = mysqli_query($con, $sql_disciplina);
	
	$dados_disciplina = mysqli_fetch_assoc($result);

	if (mysqli_num_rows($result) > 0) {

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Formulário Editar Disciplina</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form method="POST" 
			  action="atualizar_dados_disciplina.php?disciplina=<?php echo $dados_disciplina['id'] ?>">
			  <input type="hidden" name="id" value="<?php echo $dados_disciplina['id'] ?>" />
			Código da disciplina: <input name="codigo_disciplina" 
				type="text" value="<?php echo $dados_disciplina['codigo_disciplina'] ?>" />	
			<br />	
			Nome disciplina: <input name="nome_disciplina" 
				type="text" value="<?php echo $dados_disciplina['nome_disciplina'] ?>" />
			<br />	
			Campus: <input name="campus" 
				type="text" value="<?php echo $dados_disciplina['campus'] ?>" />
			<br />
			Unidade Acadêmica: <input name="unidade_academica" 
				type="text" value="<?php echo $dados_disciplina['unidade_academica'] ?>" />
			<br />
			Departamento: <input name="departamento" 
				type="text" value="<?php echo $dados_disciplina['departamento'] ?>" />
			<br />
			Carga Horária: <input name="carga_horaria" 
				type="text" value="<?php echo $dados_disciplina['carga_horaria'] ?>" />
			<br />
			<label for='tipo'>Tipo: </label>
				<input type='text' name='tipo' id='tipo' list='lsttipo'>
				<datalist id='lsttipo'>
					<option>Presencial</option>
					<option>EaD (Educação a Distância)</option>
					<option>Semipresencial</option>
				</datalist>
			<br />
			
			<br />
			
			<button type="submit">Atualizar</button>

		</form>
	</body>
</html>
<?php
	}
	else {
		echo "<br />Disciplina não existe!";
	}
?>
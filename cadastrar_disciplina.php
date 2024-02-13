<?php require_once("config/con_db.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Formulário</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form method="POST" 
			  action="inserir_disciplina.php">
			Código da Disciplina: <input name="codigo_disciplina" 
				type="text" />	
            <br />    
			<br />
                Nome Disciplina: <input name="nome_disciplina" 
				type="text" />
            <br />
            <br />    
                Campus: <input name="campus" 
				type="text" />
            <br />
            <br />    
                Unidade Acadêmica: <input name="unidade_academica" 
				type="text" />
            <br />
            <br />    
                Departamento: <input name="departamento" 
				type="text" />
            <br />
            <br />    
                Carga Horária: <input name="carga_horaria" 
				type="text" />
            <br />
			<br />
				Tipo Curso: 
				<select name="tipo">
					<option value="0">- selecione -</option>
					<?php
						$sql_tipo_cursos = "SELECT * FROM `tipo` ORDER BY id_tipo ASC";
						$result = mysqli_query($con, $sql_tipo_cursos);

						while ($dados_curso = mysqli_fetch_assoc($result)) {
							?>
							<option value="<?php echo $dados_curso['id_tipo'] ?>">
								<?php echo $dados_curso['nome_tipo'] ?>
							</option>
							<?php
						}
					?>
				</select>
			<br/>
			<br/>
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>
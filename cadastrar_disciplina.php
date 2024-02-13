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
				<label for='tipo'>Tipo: </label>
				<input type='text' name='tipo' id='tipo' list='lsttipo'>
				<datalist id='lsttipo'>
					<option>Presencial</option>
					<option>EaD (Educação a Distância)</option>
					<option>Semipresencial</option>
				</datalist>

			<br />
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>
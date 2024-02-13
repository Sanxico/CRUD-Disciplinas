<?php

	require_once("config/con_db.php");

	$id_disciplina = (int) $_GET['disciplina'];
	
	$sql_delete = "DELETE FROM disciplina WHERE id='$id_disciplina'";
	
	$result = mysqli_query($con,$sql_delete);
	
	if ($result !== false) {
		?>
		<p>Disciplina deletado com sucesso!</p>
		<p><a href="listar_disciplinas.php">&lt;&lt;&nbsp;Voltar</a></p>
		<?php
	}
	else {
		echo "<br />Erro deletando aluno! ".mysqli_error($con);
	}

?>
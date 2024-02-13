<?php

	require_once('config/con_db.php');
	
	$sql_select = "SELECT * FROM disciplina";
	
	$result = mysqli_query($con, $sql_select);
	
	//if ($result !== false)

	//tenho que percorrer o meu result
	while (($registro = mysqli_fetch_assoc($result)) != null) {
		?>
		Nome: <?php echo $registro['nome_disciplina'] ?>
		<a href="editar_disciplina.php?disciplina=<?php echo $registro['id'] ?>">editar</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="deletar_disciplina.php?disciplina=<?php echo $registro['id'] ?>">deletar</a>
		<br />
		<?php
	}
	//cada vez que chamamos a função "mysqli_fetch" ela 'pega' uma linha do resultset ($result) e move o ponteiro para a próxima linha
	//$registro['id'], $registro['rga'], $registro['nome']
	
?>
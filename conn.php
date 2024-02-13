<?php

// Conexão com o banco de dados
error_reporting(E_ALL);
	
	
	echo "<h1>Teste BD usando mysqli_connect </h1>";
	
	$conn =  mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"pawii"); //no caso da mysqli, mesmo procedural, o parâmetro $conn (referência a conexão) é obrigatório
	
	$result = mysqli_query($conn,"SELECT * FROM disciplina"); //novamente
	
	echo "<table>";
	while ($dados_disciplina = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$dados_disciplina['id']."</td>";
		echo "<td>".$dados_disciplina['codigo_disciplina']."</td>";
		echo "<td>".$dados_disciplina['nome_disciplina']."</td>";
        echo "<td>".$dados_disciplina['campus']."</td>";
        echo "<td>".$dados_disciplina['unidade_academica']."</td>";
        echo "<td>".$dados_disciplina['departamento']."</td>";
        echo "<td>".$dados_disciplina['carga_horaria']."</td>";
        echo "</tr>";
	}
	echo "</table>";


?>

<?php

    namespace PAWII;

    use function \c;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Salvar Dados no Banco de Dados</title>
</head>
<body>
    <?php
        
        //na útima aula que tivemos conseguimos receber os dados do formulário
        //no arquivo recebe-dados.php
        
        $codigo_disciplina = $_POST['codigo_disciplina'];
        $nome_disciplina = $_POST['nome_disciplina'];
		$campus = $_POST['campus'];
        $unidade_academica = $_POST['unidade_academica'];
        $departamento = $_POST['departamento'];
        $carga_horaria = $_POST['carga_horaria'];
        
        
        

        //vamos iniciar fazendo de forma bem simples, sem nos preocupar com muita coisa
        //primeiro vamos nos conectar ao banco de dados utilizando as funções mysqli_*
        $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con, "pawii");

        //agora vamos fazer uma string SQL simples para iserir os dados em uma tabela chamada disciplina
        $sql_insere = "INSERT INTO disciplina (codigo_disciplina, nome_disciplina, campus, unidade_academica, departamento, carga_horaria) VALUES ('$codigo_disciplina', '$nome_disciplina', '$campus', '$unidade_academica', '$departamento', '$carga_horaria')"; //reparem que essa linha é apenas uma string dentro de uma variável

        //agora vamos de fato 'jogar' a string/variável para 'dentro' do banco de dados
        $result = mysqli_query($con, $sql_insere); //jogamos o resultado da query para 'dentro de uma variável' para podermos verificar se a inserção deu certo

        //se olharmos no manual do PHP, o retorno da função mysqli_query pode variar entre true, false e um objeto do tipo 'mysqli_result'
        //sendo esse último para casos em que uma consulta que retorna dados, como por exemplos um 'SELECT' seja retornado corretamente 
        //https://www.php.net/manual/pt_BR/mysqli.query.php

        if ($result !== false) {
            echo "<br />Registro inserido com sucesso!";
        }
        else {
            echo "<br />Erro inserindo registro: ".mysqli_error($con);
        }

    ?>    
</body>
</html>
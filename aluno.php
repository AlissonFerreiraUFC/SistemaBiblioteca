<?php
//{
	if(isset($_POST['submit']))
	{
		include_once('config.php');
		$matricula = isset($_POST['matricula']) ? $_POST['matricula'] :"";
		$nome = isset($_POST['nome']) ? $_POST['nome'] :"";
		$curso = isset($_POST['c_curso']) ? $_POST['c_curso'] :"";
		$ende = isset($_POST['ende']) ? $_POST['ende'] :"";
		$telefone = isset($_POST['telefone']) ? $_POST['telefone'] :"";
 		$ingresso = isset($_POST['d_ingresso']) ? $_POST['d_ingresso'] :"";
 		$conclusao = isset($_POST['d_conclusao']) ? $_POST['d_conclusao'] :"";

		$result = MySQLI_query($conexao, "INSERT INTO aluno(matricula,nome,cod_curso,endereco,telefone,ingresso,conclusao)VALUES ('$matricula','$nome','$curso','$ende','$telefone','$ingresso','$conclusao')");
	}
?>
<html>
    <head> 
	    <meta charset="utf-8">
	<title>página de cadastro de aluno</title>
	<style>
	    body{
		
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to  right, #31d648, rgb(17, 54, 71));
	    }
	    .box{
	    	position: absolute;
	    	top: 50%;
	    	left: 50%;
			transform: translate(-50%, -50%);
	        background-color: black;
	        color:white;
			padding: 15px;
			border-radius: 10%;
			width: 20%;
	    }
	    fieldset {
	    	border: 5px groove #31d648;
	    }
	    legend {
	    	border: 1px groove mediumseagreen;
			padding: 10px;
			text-align: center;
			background-color:mediumseagreen;
			color: black;
	    }
	    .inputBox{
	    position: relative;
	    }
	    .inputUser{
		background: none;
		border: none;
		border-bottom: 1px solid white;
		color:white;
		font-size: 15px;
		outline: none;
		width: 100%	
	    }

	    #submit{
	        background-image: linear-gradient(to  right, rgb(17, 54, 71),#31d648);
			width: 100%;
			padding: 15px;
			border: none;
			font-size: 15px;
	    }
	</style> 	
</head>
<body>
	<a href="apresentacao.html">Inicio</a>
	<div class ="box">
	    <form action="aluno.php" method="POST">
		<fieldset>
		    <legend><b>Cadastro de Alunos</b></legend>
   <br>
		    <div class= "inputBox">
			<input type="number" name="matricula" id="matricula" class="inputUser" required>
			<label for="matricula">Matrícula</label>
		    </div>
		    <br>
		    <div class= "inputBox">
			<input type="text" name="nome" id="nome" class="inputUser" required>
			<label for="nome">Nome</label>
		    </div>
		    <br>
		    <div class= "inputBox">
			<input type="number" name="c_curso" id="c_curso" class="inputUser" required>
			<label for="c_curso">Código Curso</label>
		    </div>
		    <br>
			 <div class= "inputBox">
			<input type="text" name="ende" id="ende" class="inputUser" required>
			<label for="ende">Endereço</label>
		    </div>
		    <br>
	        <div class= "inputBox">
	        	<div id="adicionar">
		    	<input type="number" name="telefone" id="telefone" class="inputUser" required>
				<label for="telefone">Telefone</label>
		    	</div>
		    <button type="button" onclick="adicionarCampo()"> + </button>
		    </div>
		    <br>
		    <input type="date" name="d_ingresso" id="d_ingresso" required>
			<label for="d_ingresso"><br>Data de Ingresso no Curso</label>
			<br>
			<input type="date" name="d_conclusao" id="d_conclusao" required>
			<label for="d_conclusao"><br>Data de Conclusão Prevista</label>
		    <br>
		    <br>
		    <input type="submit" name="submit" id="submit">
		</fieldset>
	     </form>
	     <script src="addtelAluno.js"> </script>
	</div>
</body>
</html>
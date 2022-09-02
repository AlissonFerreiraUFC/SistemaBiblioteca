<?php
	if(isset($_POST['submit']))
	{
		include_once('config.php');
		$matricula = isset($_POST['matricula']) ? $_POST['matricula'] :"";
		$nome = isset($_POST['nome']) ? $_POST['nome'] :"";
		$Trabalho = isset($_POST['curso']) ? $_POST['curso'] :"";
		$telefone = isset($_POST['telefone']) ? $_POST['telefone'] :"";

		$result = MySQLI_query($conexao, "INSERT INTO professores(matr_siape,Nome,Regime,Telefone)VALUES ('$matricula','$nome','$Trabalho','$telefone')");
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
	<div class ="box">
	    <form action="professor.php" method="POST">
		<fieldset>
		    <legend><b>Cadastro de Professores</b></legend>
   <br>
		    <div class= "inputBox">
			<input type="number" name="matricula" id="matricula" class="inputUser" required>
			<label for="matricula">Matrícula Siape</label>
		    </div>
		    <br>
		    <div class= "inputBox">
			<input type="text" name="nome" id="nome" class="inputUser" required>
			<label for="nome">Nome</label>
		    </div>
		    <br>
		    <div class= "inputBox">
			<input type="text" name="ende" id="ende" class="inputUser" required>
			<label for="ende">Endereço</label>
		    </div>
		    <br>
		    <div class= "inputBox">
			<input type="number" name="telefone" id="telefone" class="inputUser" required>
			<label for="c_curso">Telefone</label>
		    </div> 
		    <br>
		    <div class= "inputBox">
			<p>Regime de trabalho: </p>
			<input type="radio" name="Trabalho" id="20"  value= "20" required>
			<label for="20">20</label>
			<input type="radio" name="Trabalho" id="40"  value= "40" required>
			<label for="40">40</label>
			<input type="radio" name="Trabalho" id="DE"  value= "DE" required>
			<label for="DE">DE</label>
		    </div> 
		    <br>
		    <div class= "inputBox">
			<input type="number" name="c_curso" id="c_curso" class="inputUser" required>
			<label for="c_curso">Código Curso</label>
		    </div>
			<br>
			<input type="date" name="d_conclusao" id="d_conclusao" required>
			<label for="d_conclusao"><br>Data de Contratação</label>
		    <br>
		    <br>
		    <input type="submit" name="submit" id="submit">
		</fieldset>
	     </form>
	</div>
</body>
</html>
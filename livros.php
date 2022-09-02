<?php
//{
	if(isset($_POST['submit']))
	{
		include_once('config.php');
		$isbn = isset($_POST['isbn']) ? $_POST['isbn'] :"";
		$titulo = isset($_POST['titulo']) ? $_POST['titulo'] :"";
		$ano_publi = isset($_POST['ano_publi']) ? $_POST['ano_publi'] :"";
		$editora = isset($_POST['editora']) ? $_POST['editora'] :"";
		$qtd_copias = isset($_POST['qtd_copias']) ? $_POST['qtd_copias'] :"";
 		$categoria = isset($_POST['id_categoria']) ? $_POST['id_categoria'] :"";
 		$autor = isset($_POST['email_autor']) ? $_POST['email_autor'] :"";

		$result = MySQLI_query($conexao, "INSERT INTO livros(isbn,titulo,ano_publi,editora,qtd_copias,categoria,autor)VALUES ('$isbn','$titulo','$ano_publi','$editora','$qtd_copias','$categoria','$autor')");
	}
?>
<html>
    <head> 
	    <meta charset="utf-8">
	<title>página de cadastro de livros</title>
	<style>
         {
            box-sizing: border-box;
         }

        body {
            margin: 0;
	    font-family: 'Oswald', sans-serif;
	    }

        .cabecalho {
            background: #333;
            border-bottom: solid 5px #333;
            height: 80px;
            box-sizing: content-box;
        }

        .menu {
            display: inline-block;
            vertical-align: top;
            height: 80px;
            padding: 25px;
        }

        .menu ul {
            margin: 0;
            padding: 0;
        }

        .menu li {
            display: inline-block;
        }

        .cabecalho a {
            text-decoration: none;
            color: #eee;
            font-size: 1.3em;
        }

        .menu a {
            padding: 15px;
        }

        .autenticacao {
            float: right;
            height: 80px;
            padding: 25px;
        }

        .menu a:hover,
        .menu a.selected {
            background-color: #4faddb;
            color: #000;
        }

        .botao {
            border-radius: 30px;
            padding: 10px 25px;
            margin: 10px;
        }

        .destaque {
            background: red;
        }

        @media(min-width: 679px) {
            .menu-toggle {
                display: none;
            }
        }

        @media(max-width: 680px) {
            .menu {
                display: none;
            }
        }

        @media(max-width: 910px) {
            .autenticacao {
                display: none;
            }
        }
        .box{
	    	position: absolute;
	    	top: 50%;
	    	left: 50%;
			transform: translate(-50%, -50%);
	    }
	    fieldset {
	    	border: 5px groove blueviolet;
	    	text-align: center;
	    	width:600px;
	    }
	    legend {
	    border: 3px groove slateblue;
		padding: 10px;
		text-align: center;
		background-image: linear-gradient(to  right, blueviolet,black);
		color: white;
	    }
	    .button{
	    	background-image: linear-gradient(to  right, blueviolet,black);
			width: 50%;
			padding: 8px;
			margin-left: auto;
			margin-right: auto; 
			border: none;
			font-size: 15px;
			color: white;
			text-align: center;
	    } 
	    .inputUser{
		background: none;
		border-bottom: 1px solid black;
		color:black;
		font-size: 15px;
		outline: none;
		width: 100%	
	    }
	    #submit{
	    	background-image: linear-gradient(to  right, blueviolet,black);
			width: 50%;
			padding: 8px;
			margin-left: auto;
			margin-right: auto; 
			border: none;
			font-size: 15px;
			color: white;
			text-align: center;
	    } 
    </style>
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <a href="#inicio">
            </a>
        </div>
        <button class="menu-toggle">
            <i class="fa fa-lg fa-bars"></i>
        </button>
        <nav class="menu">
            <ul>
                <li>
                    <a href="admini.php">Início</a>
                </li>
               
            </ul>
        </nav>
        <aside class="autenticacao">
            <a href="sair.php" class="botao destaque">Sair</a>
        </aside>
    </header>
	 </style>
<body>
	<div class ="box">
	    <form action="livros.php" method="POST">
		<fieldset>
		    <legend><b>Cadastro de livros</b></legend>
   <br>
		    <div class= "inputBox">
			<input type="number" name="isbn" id="isbn" class="inputUser" required>
			<label for="isbn">Isbn</label>
		    </div>
		    <br>
		    <div class= "inputBox">
			<input type="text" name="titulo" id="titulo" class="inputUser" required>
			<label for="titulo">Titulo</label>
		    </div>
		    <br>
		    <div class= "inputBox">
			<input type="date" name="ano_publi" id="ano_publi" class="inputUser" required>
			<label for="ano_publi">Ano de publicação</label>
		    </div>
		    <br>
			 <div class= "inputBox">
			<input type="text" name="editora" id="editora" class="inputUser" required>
			<label for="editora">Editora</label>
		    </div>
		    <br>
	        <div class= "inputBox">
		    <input type="number" name="qtd_copias" id="qtd_copias" class="inputUser" required>
			<label for="qtd_copias">Quantidade de Cópias</label>	
		     </div>
		    <br>
		    <input type="text" name="categoria" id="categoria" class="inputUser"required>
			<label for="categoria"><br>Categoria</label>
			<br>
			<input type="text" name="autor" id="autor" class="inputUser" required>
			<label for="autor"><br>Autor</label>
		    <br>
		    <br>
		    <input type="submit" name="submit" id="submit">
		</fieldset>
	     </form>
	</div>
</body>
</html>
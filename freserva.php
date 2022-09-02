<?php
//{
	if(isset($_POST['submit']))
	{
		include_once('config.php');
		$titulo = isset($_POST['titulo']) ? $_POST['titulo'] :"";
		$autor = isset($_POST['autor']) ? $_POST['autor'] :"";
        $entrega = isset($_POST['entrega']) ? $_POST['entrega'] :"";

		$result = MySQLI_query($conexao, "INSERT INTO reservaalu(titulo,autor,entrega)VALUES ('$titulo','$autor','$entrega')");
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
	    <form action="freserva.php" method="POST">
		<fieldset>
		    <legend><b>Reservar livros</b></legend>
   <br>
		    <div class= "inputBox">
			<input type="text" name="titulo" id="titulo" class="inputUser" required>
			<label for="titulo">titulo</label>
		    </div>
		    <br>
		    <div class= "inputBox">
			<input type="text" name="autor" id="autor" class="inputUser" required>
			<label for="autor"> autor</label>
		    </div>
            <div class= "inputBox">
            <input type="date" name="entrega" id="entrega" class="inputUser" required>
            <label for="entrega">entrega </label>
            </div>
		    <br>
		    <br>
		    <input type="submit" name="submit" id="submit">
		</fieldset>
	     </form>
	</div>
</body>
</html>
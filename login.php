<?php
	
	if(isset($_POST['submit']))
	{
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];


		if(($usuario == 'Admin') and ($senha == 'root'))
		{
			header('location: admini.php');
		}
		else 
		{
		 if(($usuario == 'aluno') and ($senha == '123'))
			{
				header('location: p_aluno.php');
			}
			else
			{
				if(($usuario == 'prof') and ($senha == '1234'))
				{
					header('location: p_prof.php');
				}
				else{

						if(($usuario == 'bibli') and ($senha == '123'))
				{
					header('location: p_bibli.php');
				}
				}
			}
		}
	}
?>
<html>
    <head> 
	    <meta charset="utf-8">
	<title>página de cadastro</title> 	
	</head>
	<body>
	 <style>
         {
            box-sizing: border-box;
        }

        body {
            margin: 0;
	    font-family: 'Oswald', sans-serif;
            background-image: linear-gradient(to  right, #31d648, rgb(17, 54, 71));
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


        .destaque {
            background: #f50a31;
            color: #fff;
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
		width: 100%;	
	    }
	    .button{
	        background-image: linear-gradient(to  right, rgb(17, 54, 71),#31d648);
		
		width: 93%;
		padding: 8px;
		border: none;
		font-size: 15px;
		color: white;
		text-align: center;
	    } 
	    .inputsubmit{
	        background-image: linear-gradient(to  right, rgb(17, 54, 71),#31d648);
			width: 100%;
			padding: 15px;
			border: none;
			font-size: 15px;
			cursor: pointer;
	    }
    </style>
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
        </div>
        <button class="menu-toggle">
            <i class="fa fa-lg fa-bars"></i>
        </button>
        <nav class="menu">
            <ul>
                <li> 
		<a href="apresentacao.html">Início</a>
                </li>
        </nav>
	</body>
	<br><br>
<body>
	<div class ="box">
		<form action="login.php" method="POST">    
		    <form action="testeLogin.php" method="POST">
		    	<form action="pequisar.php" method="POST">
				<fieldset>
				    <legend><b>Login</b></legend>
		  <br>
				    <div class= "inputBox">
					<input type="text" name="usuario" id="usuario" class="inputUser" required>
					<label for="usuario">Usuário</label>
				    </div>
				    <br>
				    <div class= "inputBox">
				    <input type="password" name="senha" id="senha" class="inputUser" required>
					<label for="senha">Senha</label>
				    </div>
				    <br>
				    <br>
				    <input class = "inputsubmit" type = "submit" name = "submit" values = "Enviar">
				</fieldset>
				 </form>
		    </form>
		</form>    
	</div>
</body>
</html>
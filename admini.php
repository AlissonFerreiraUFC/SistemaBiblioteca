<html>
<head> 
	    <meta charset="utf-8">
		<title>Bem-vindo Adm!</title> 	
</head>
<body>
	 <style>/*Os estilos usados aqui foram os mesmo da apresentação, logo não se torna necessario comentar*/
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
	    	top: 70%;
	    	left: 50%;
			transform: translate(-50%, -50%);
	    }
	    fieldset {/*Como esse comando não estava na apresentação, segue o comentário... Esse comando, irá editar uma borda especial através das minhas opções, nela temos o tamanho e tipo da borda alem da cor, logo após o alinhamento do texto e seu tamanho*/
	    	border: 5px groove blueviolet;
	    	text-align: center;
	    	width:600px;
	    }
	    legend {/*Legenda é o titulo que fica acima das informações, é um retangulo de borda 3px e com uma cor, alem de uma largura de 10 px, possui tambem texto alinhado ao centro alem uma cor de fundo e fonte branca*/
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
    </style>
</head>

<body><!-- como na apresentação essa parte se refere ao corpo que fica na parte de cima, naquela faixa preta, é aqui que são criados os botões de inicio e sair nas quais são editados pelo css acima-->
    <header class="cabecalho">
        <div class="logo">
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
<body><!-- corpo das opões-->
	<br><br>
	<div class ="box"><!-- nome da classe pra editar os estilos-->
	    <form action="">
		<fieldset> <!-- Inicio do menu de opções, aqui que é formada as bordas, e tudo que estiver aqui dentro pertencerá a essa 'caixa' -->
		    <legend><b>O que deseja fazer?</b></legend> <!-- Legenda que fica ao topo-->
	<br>	
	<a href="tlogin.php">
	<div class = "button">- Alunos Cadastrados </div></a> <!-- Comos todos são iguais, aqui são adiocionados os botões e acima de cada um o comando href vai dar o direcionamento quando clicados-->
	<br>
    <a href="aluno.php">
    <div class = "button">- Cadastrar Aluno </div></a>
    <br>
	<a href="pesqprofr.php">
	<div class = "button">- Professores cadastrados </div></a>	
	<br>
    <a href="professor.php">
    <div class = "button">- Cadastrar Professor </div></a>
    <br>
	<a href="pesqfunc.php">
	<div class = "button">- Funcionários Cadastrados</div></a>
	<br>
    <a href="funcionario.php">
    <div class = "button">- Cadastrar Funcionário </div></a>
    <br>
	<a href="livros.php">
	<div class = "button">- Cadastrar Livros </div></a>	
	<br><a href="pesquisar_liv.php">
    <div class = "button">- Pesquisar Livros </div></a> 
    <br>
    <a href="reservas.php">
    <div class = "button">- Consultar Reservas </div></a>
    <br>
	<a href="freserva.php">
    <div class = "button">- Fazer Reservas </div></a>
    <br>
    <a href="categoria.php">
    <div class = "button">- Categorias </div></a>
    <br>
	<a href="pesqaut.php">
	<div class = "button">- Pesquisar Autores </div></a>	
	<br>
    <a href="autores.php">
    <div class = "button">- Cadastrar Autores </div></a>    
    <br>
    <a href="pesqcurso.php">
    <div class = "button">- Pesquisar Cursos </div></a>    
    <br>
	<a href="curso.php">
	<div class = "button">- Cadastrar Cursos </div></a>
		</fieldset>
	     </form>
	</div>
</body>
</html>

?>
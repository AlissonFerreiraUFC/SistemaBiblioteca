<?php
    
    include_once('config.php');
    if (!empty($_GET['search'])) 
    {
        $data = $_GET['search'];
        $consulta = "SELECT * FROM autores WHERE email_autor LIKE '%$data%'";
    }
    else
    {
        $consulta = "SELECT * FROM autores";
    }
    $con = $conexao->query($consulta);
?>
<html>
<head> 
        <meta charset="utf-8">
        <title>Bem-vindo!</title>   
</head>
<body>
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
        .table{
            background-color: rgba(0,0,0,0.5);
            position: absolute;
            top: 40%;
            left:50%;
            transform: translate(-50%, -50%);
        }
        .caixa-pesquisa{
            display:flex; 
            justify-content:center;  
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
                    <a href="admini.php">Voltar</a>
                </li>
               
            </ul>
        </nav>
        <aside class="autenticacao">
            <a href="sair.php" class="botao destaque">Sair</a>
        </aside>
    </header>
<body>
    <?php
        echo "<center><h1><u>Bem-vindo a página de pesquisa</u></h1></center>";
    ?>
    <br>
    <div class ="caixa-pesquisa">
        <input type="seach" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    <div>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>email_autor</th> 
                <th scape="">nome_autor</th>
                <th scape="">nacionalidade</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($user_data = $con->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$user_data['email_autor']."</td>";
                    echo "<td>".$user_data['nome_autor']."</td>";
                    echo "<td>".$user_data['nacionalidade']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
    <script>
        var search = document.getElementById('pesquisar');
        function searchData(){
            window.location = 'pesqaut.php?search='+search.value;
        }
    </script>
</html>

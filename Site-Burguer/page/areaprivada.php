<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: ../index.html");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/privado.css">
    <link rel="shortcut icon" href="../img/veto/favicon.ico" type="image/x-icon">
    <title>Minha Conta - BURGER UNIVERSE</title>
</head>
<body>
<header id='cabecalho'>
        <main>
            <img class="img-frete" src="../img/veto/frete.jpg"  />
            <label class="frete">Frete Grátis para Campo Grande-MS</label>
            <div class="redes-sociais">
                <ul>
                    <li>
                        <a href='https://facebook.com' target="_blank"><img src='../img/veto/face.png' width="20px" height="20px" />
                        </a>
                    </li>
                    <li>
                        <a href='https://instagram.com' target="_blank"><img src='../img/veto/insta.png' width="20px" height="20px"/>
                        </a>
                    </li>
                    <li>
                        <a href='https://twitter.com' target="_blank"><img src='../img/veto/twiter.png' width="20px" height="20px"/>
                        </a>
                    </li>
                </ul>
            </div>
        </main>
        </header>
        <div class='logo'>
                <a href='../index.html'><img src='../img/veto/logo.png' width="100px" height="100px"/>
                </a>
            </div>
        <header class='menu-principal'>
            <div class='menu'>
                <ul>
                    <li>
                        <a href='../index.html'>Home</a>
                    </li>
                    <li>
                        <a href='../page/cardapio.html'>Cardápio</a>
                    </li>
                    <li>
                        <a href='../index.html#historia'>Sobre Nós</a>
                    </li>
                    <li>
                        <a href='../page/form.html'>Contato</a>
                    </li>
                    <li>
                        <a href='../page/login.php'>Minha Conta</a>
                    </li>
                </ul>
                <label class='icon'>&#9776</label>
            </div>
        </header>
    <header id="topo">
	    <h1>SEJAM BEM-VINDO AO BURGER UNIVERSE!</h1><br>
        <a href="./classes/sair.php">Sair</a>
	</header>
	    
        
    <footer>
        <a href="#cabecalho">Voltar ao Topo</a><br><br>
        <label>Copyright &copy 2020 - Kleyton Dias</label>
    </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="../js/icon.js"></script>
</body>
</html>

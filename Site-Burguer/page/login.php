<?php
    require_once 'CLASSES/usuarios.php';
    $usu = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/main.css">
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
    <div id="corpo_formulario">
        <h1>Entrar</h1>
<?php
if(isset($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	
	if(!empty($email) && !empty($senha))
	{
		$usu->conectar("tela_login","localhost","root","");
		if($usu->msgErro == "")
		{
			if($usu->logar($email,$senha))
			{
				header("location: areaprivada.php");
			}
			else
			{
				?>
				<div class="msg-erro">
					Email e/ou Senha estão Incorretos!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$usu->msgErro; ?>
			</div>
			<?php
		}
	}else
	{
		?>
		<div class="msg-erro">
			Preencha todos os Campos!
		</div>
		<?php
	}
}
?>
        <form method="POST">
            <input type="email" name="email" id="" placeholder="Usuário">
            <input type="password" name="senha" id="" placeholder="Senha">
            <input type="submit" value="ENTRAR">
            <label class="cadast">Não Possui uma Conta? </label>
            <a href="../page/cadastrar.php"><strong>Cadastre-se</strong></a>
        </form>
    </div>
    <footer>
        <a class='topo' href="#cabecalho">Voltar ao Topo</a><br>
        <label>Copyright &copy 2020 - Kleyton Dias</label>
    </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="../js/icon.js"></script>
</body>
</html>
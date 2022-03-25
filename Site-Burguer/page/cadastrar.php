<?php
	require_once '../page/classes/usuarios.php';
	$usu = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../img/veto/favicon.ico" type="image/x-icon">
    <title>Cadastrar - BURGER UNIVERSE</title>
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
    <div id="corpo_formulario_cadastro">
        <h1>Cadastre-se</h1>
<?php
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['conf_senha']);
	if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
	{
		$usu->conectar("tela_login","localhost","root","");
		if($usu->msgErro == "")
		{
			if($senha == $confirmarSenha)
			{
				if($usu->cadastrar($nome,$telefone,$email,$senha))
				{
					?>
					<div class="msg-sucesso">
					    Cadastrado com Sucesso!<a class="acessar" href="login.php">Acesse já!</a>
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Email já cadastrado!
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="msg-erro">
					Senhas não Correspondem!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro;?>
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
            <input type="text" name="nome" id="" placeholder="Nome Completo">
            <input type="tel" name="telefone" id="" placeholder="Telefone">
            <input type="email" name="email" id="" placeholder="Digite seu E-mail">
            <input type="password" name="senha" id="" placeholder="Senha">
            <input type="password" name="conf_senha" id="" placeholder="Confirmar Senha">
            <input type="submit" value="CADASTRAR">
        </form>
    </div>
    <footer>
        <a class="topo" href="#cabecalho">Voltar ao Topo</a><br>
        <label>Copyright &copy 2020 - Kleyton Dias</label>
    </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="../js/icon.js"></script>
</body>
</html>
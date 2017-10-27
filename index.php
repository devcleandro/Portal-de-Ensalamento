<?php 
include("seguranca.php");
protegePagina();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Portal de Ensalamento</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
	</head>
	<body>
		<div id="corpo">
		<div id="banner">
			<div id="menu">
				<ul>
					<li><a href="index.php">Início</a></li>
					<li><a href="criar_ensalamento.php">Criar Ensalamento</a></li>
					<li><a href="visul_hora.php">Visualizar Horários</a></li>
					<li><a href="gera_relat.php">Gerar Relatórios</a></li>
				</ul>
				<br/>
			</div>
			<div id="cabecalho">
				<div id="logo">
					<h1><a href="index.php">Portal de Ensalamento</a></h1>
				</div>
                <div id="info">
					<h3><?php echo "Olá, " . $_SESSION['usuarioNome'];?> | <a href="logout.php">Fazer Logout</a></h3>
                </div>
			</div>
			<div id="pagina">
				<div id="lateral">
					<div class="caixa">
						<h3>Parcerias</h3>
						<ul class="lista">
							<li><a href="#">UFAM</a></li>
							<li><a href="#">ICET</a></li>
							<li><a href="#">ES</a></li>
						</ul>
					</div>
				</div>
				<div id="conteudo">
					<div class="caixa">
						<h2>Seja bem vindo ao Portal de ensalamento</h2>
						<p>
						Esta Ferramenta tem o Objetivo de auxiliar na organização de salas através de um curso, distribuindo de forma personalizada cada disciplina em determinado horário do dia e da semana.
						</p>
					</div>
					<div id="col1" class="caixa">
						<h3>O que você encontrará...</h3>
						<p>
                        	O sistema tem formulários para cadastrar informações de Professores, Cursos, Sala e etc, para ajudar a organizar melhor o ensalamento de acordo com sua preferência.
						</p>
					</div>
					<div id="col2" class="caixa">
						<h3>Trabalhos futuros...</h3>
						<p>
                        	Através da plataforma JavaScript User Inteface é capaz de mover elementos na pagina para qualquer lugar, com isso deseja-se aprimorar o sistema para que este recurso seja atribuido a ele, ficando assim muito mais atrativo e de fácil utilização.
						</p>
					</div>
					<br/>
				</div>
				<br/>
			</div>
		</div>
		<div id="rodape">
			&copy; 2013 Portal de Ensalamento | Desenvolvido por Alunos de Engenharia de Software
		</div>
		</div>
	</body>
</html>
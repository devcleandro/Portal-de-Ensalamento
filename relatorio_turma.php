<?php 
include("seguranca.php");
protegePagina();

$turma = $_POST['turma'];

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
					<li><a href="add_sala.php">Criar Ensalamento</a></li>
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
						<h3>Ferramentas</h3>
						<ul class="lista">
							<li><a href="relat_professor.php">Relatótio dos Professores</a></li>
							<li><a href="relat_disciplina.php">Relatório das Disciplinas</a></li>
							<li><a href="relat_bloco.php">Relatorio dos Blocos</a></li>
							<li><a href="relat_sala.php">Relatorio das Salas</a></li>
							<li><a href="relat_turma.php">Relatorio das Turmas</a></li>
						</ul>
					</div>
				</div>
				<div id="conteudo">
					<div class="caixa">
					<h3>Turma: <?php echo $turma?></h3>
					<ul>
						<li>Disciplinas Existentes:
							<p style="color: blue"><?php
							$resultado = mysql_query("SELECT *
							FROM turma t, disciplina d
							WHERE t.ID_TURMA = d.ID_TURMA");
							while($tbl=mysql_fetch_array($resultado)){
								echo " |".$dia=$tbl['NOME_DISCIPLINA'];
							}
							?></p>
							<li>Quais Disciplinas mais pesadas:
							<p style="color: blue"><?php
							$resultado = mysql_query("SELECT max( d.CARGA_HR_TOTAL ), NOME_DISCIPLINA
							FROM turma t, disciplina d
							WHERE t.ID_TURMA = d.ID_TURMA");
							while($tbl=mysql_fetch_array($resultado)){
								echo "| ".$dia=$tbl['NOME_DISCIPLINA'];
							}
							?></p>
					</ul>
					</div>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
					<p><br/>
				  </p>
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
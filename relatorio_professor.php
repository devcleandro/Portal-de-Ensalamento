<?php 
include("seguranca.php");
protegePagina();

$professor = $_POST['professor'];

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
					<h3>Professor <?php echo $professor?></h3>
					<ul>
						<li>Quais os dias da Semana que o Professor(a) Leciona?
							<p style="color: blue"><?php
							$resultado = mysql_query("SELECT NOME_DIA
							FROM professor p, disciplina d, semana_disciplina sd, semana s
							WHERE p.ID_PROFESSOR = d.ID_PROFESSOR
							AND d.ID_DISCIPLINA = sd.ID_DISCIPLINA
							AND sd.ID_SEMANA = s.ID_SEMANA
							AND p.NOME = '$professor'");
							while($tbl=mysql_fetch_array($resultado)){
								echo " |".$dia=$tbl['NOME_DIA'];
							}
							?></p>
							<li>Qual sua Carga Horária Total?
							<p style="color: blue"><?php
							$resultado = mysql_query("SELECT COUNT(*)
							FROM professor p, disciplina d, semana_disciplina sd
							WHERE p.ID_PROFESSOR = d.ID_PROFESSOR
							AND d.ID_DISCIPLINA = sd.ID_DISCIPLINA
							AND p.NOME = '$professor'");
							while($tbl=mysql_fetch_array($resultado)){
								echo "| ".($dia=$tbl['COUNT(*)']*2)."horas Totais";
							}
							?></p>
							<li>Para Quantas Turmas Leciona?
							<p style="color: blue"><?php
							$resultado = mysql_query("SELECT COUNT(*)
							FROM professor p, disciplina d, turma t
							WHERE p.ID_PROFESSOR = d.ID_PROFESSOR
							AND d.ID_TURMA = t.ID_TURMA
							AND p.NOME = '$professor'");
							while($tbl=mysql_fetch_array($resultado)){
								echo "| ".($dia=$tbl['COUNT(*)'])."Turmas";
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
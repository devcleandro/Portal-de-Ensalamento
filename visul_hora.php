<?php 
include("seguranca.php");
protegePagina();
$resultado = mysql_query("SELECT * FROM sala");

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
						<h3>Inserções</h3>
						<ul class="lista">
							<li><a href="add_hora.php">Adicionar Horários</a></li>
						</ul>
						<h3>Visualizações</h3>
						<ul class="lista">
							<li><a href="visul_hora.php">Visualizações por Disciplinas</a></li>
							<li><a href="visual_professor.php">Visualizações por Professores</a></li>
						</ul>
					</div>
				</div>
				<div id="conteudo">
                <?php
				if(mysql_num_rows($resultado)>0)
					while($info=mysql_fetch_array($resultado)){
						$sala = $info['NUMERO_SALA'];
						$bloco = $info['BLOCO'];
						echo "<h3>Sala: ".$sala." | Bloco: ".$bloco."</h3>";
						
						
	                	echo "<div id='tabela'>";
					  	echo "<table width='100%' border='0'>";
					    echo "<tr>";
					    echo "<th scope='col'>&nbsp;</th>";
					    echo "<th scope='col'>Segunda</th>";
				    	echo "<th scope='col'>Terça</th>";
					    echo "<th scope='col'>Quarta</th>";
					    echo "<th scope='col'>Quinta</th>";
					    echo "<th scope='col'>Sexta</th>";
				        echo "</tr>";
				    
						echo "<tr>";
				    	echo "<th scope='row'>8:00</th>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Segunda' AND HORARIO_INICIAL = '8:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Terca' AND HORARIO_INICIAL = '8:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quarta' AND HORARIO_INICIAL = '8:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quinta' AND HORARIO_INICIAL = '8:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Sexta' AND HORARIO_INICIAL = '8:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
						echo "</tr>";
						
				    
						echo "<tr>";
				    	echo "<th scope='row'>10:00</th>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Segunda' AND HORARIO_INICIAL = '10:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Terca' AND HORARIO_INICIAL = '10:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quarta' AND HORARIO_INICIAL = '10:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quinta' AND HORARIO_INICIAL = '10:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Sexta' AND HORARIO_INICIAL = '10:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
						echo "</tr>";
						
				    
						echo "<tr>";
				    	echo "<th scope='row'>12:00</th>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Segunda' AND HORARIO_INICIAL = '12:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Terca' AND HORARIO_INICIAL = '12:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quarta' AND HORARIO_INICIAL = '12:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quinta' AND HORARIO_INICIAL = '12:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Sexta' AND HORARIO_INICIAL = '12:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
						echo "</tr>";
						
				    
						echo "<tr>";
				    	echo "<th scope='row'>14:00</th>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Segunda' AND HORARIO_INICIAL = '14:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Terca' AND HORARIO_INICIAL = '14:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quarta' AND HORARIO_INICIAL = '14:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quinta' AND HORARIO_INICIAL = '14:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Sexta' AND HORARIO_INICIAL = '14:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
						echo "</tr>";
						
				    
						echo "<tr>";
				    	echo "<th scope='row'>16:00</th>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Segunda' AND HORARIO_INICIAL = '16:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Terca' AND HORARIO_INICIAL = '16:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quarta' AND HORARIO_INICIAL = '16:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quinta' AND HORARIO_INICIAL = '16:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Sexta' AND HORARIO_INICIAL = '16:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
						echo "</tr>";
						
				    
						echo "<tr>";
				    	echo "<th scope='row'>18:00</th>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Segunda' AND HORARIO_INICIAL = '18:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Terca' AND HORARIO_INICIAL = '18:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quarta' AND HORARIO_INICIAL = '18:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Quinta' AND HORARIO_INICIAL = '18:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
					    echo "<td>";
						$resposta = mysql_query("SELECT * FROM semana_disciplina sd, sala sa, semana se, disciplina d WHERE sd.ID_SEMANA = se.ID_SEMANA AND sd.ID_SALA = sa.ID AND sd.ID_DISCIPLINA = d.ID_DISCIPLINA AND NOME_DIA = 'Sexta' AND HORARIO_INICIAL = '18:00' AND NUMERO_SALA =$sala AND BLOCO = '$bloco'");
						while($dia=mysql_fetch_array($resposta)){
							echo $dia['NOME_DISCIPLINA'];
						}
					    echo "</td>";
						echo "</tr>";
						
					  echo "</table>";
					  echo "</div>";
					}
					else
						echo "Nenhuma Sala Encontrada!";
				  ?>
				  <br/>
			  </div>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
				<p><br/>
			  </p>
            </div>
		</div>
		<div id="rodape">
			&copy; 2013 Portal de Ensalamento | Desenvolvido por Alunos de Engenharia de Software
		</div>
		</div>
	</body>
</html>
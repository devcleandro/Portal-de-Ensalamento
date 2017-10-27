<?php 
include("seguranca.php");
protegePagina();

$semana = mysql_query("SELECT * FROM semana");
$sala = mysql_query("SELECT * FROM sala");
$disciplina = mysql_query("SELECT * FROM disciplina");

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
                	<div class="caixa">
						<h3>Inserir Aula:</h3>
						<hr>
                	  <form id="form1" method="post" action="add_registro.php?tipo=aula">
                	    <table border="0" align="center">
                	      <tr>
                	        <th align="right" scope="row">Disciplina:</th>
                	        <td><select name="disciplina" id="disciplina">
                	          <option></option>
                	          <?php
							while($tbl_disciplina = mysql_fetch_array($disciplina)){
								$nome_disciplina = $tbl_disciplina['NOME_DISCIPLINA'];
								$id_disciplina = $tbl_disciplina['ID_DISCIPLINA'];
								echo "<option value='$id_disciplina'>".$nome_disciplina;
							}
							?>
              	          </select></td>
              	        </tr>
                	      <tr>
                	        <th align="right" scope="row">Dia da Semana:</th>
                	        <td><select name="semana" id="semana">
                	          <option></option>
                            <?php
							while($tbl_semana = mysql_fetch_array($semana)){
								$nome_semana = $tbl_semana['NOME_DIA'];
								$id_semana = $tbl_semana['ID_SEMANA'];
								echo "<option value='$id_semana'>".$nome_semana;
							}
							?>
              	            </select>
                            </td>
              	        </tr>
                	      <tr>
                	        <th align="right" scope="row">Sala:</th>
                	        <td><select name="sala" id="sala">
                	          <option></option>
                            <?php
							while($tbl_sala = mysql_fetch_array($sala)){
								$nome_sala = $tbl_sala['NUMERO_SALA'];
								$id_sala = $tbl_sala['ID'];
								$nome_bloco=$tbl_sala['BLOCO'];
								echo "<option value='$id_sala'>".$nome_sala." | ".$nome_bloco;
								}
							?>
              	          </select></td>
              	        </tr>
                	      <tr>
                	        <th align="right" scope="row">Horário Inicial:</th>
                	        <td><select name="horario" id="horario">
                              <option></option>
                	          <option value="8:00">8:00 Horas</option>
                	          <option value="10:00">10:00 Horas</option>
                	          <option value="12:00">12:00 Horas</option>
                	          <option value="14:00">14:00 Horas</option>
                	          <option value="16:00">16:00 Horas</option>
                	          <option value="18:00">18:00 Horas</option>
                            </select></td>
              	        </tr>
                	      <tr>
                	        <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="Inserir Aula" /></th>
               	          </tr>
              	      </table>
              	      </form>
                    </div>
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
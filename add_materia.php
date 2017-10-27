<?php 
include("seguranca.php");
protegePagina();

$sql = "SELECT * FROM disciplina";
$resultado = mysql_query($sql);

$professor = "SELECT ID_PROFESSOR, NOME FROM professor";
$resultado_professor = mysql_query($professor);

$turma= "SELECT ID_TURMA, NOME_CURSO FROM turma";
$resultado_turma = mysql_query($turma);
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
						<h3>Ferramentas</h3>
						<ul class="lista">
							<li><a href="add_sala.php">Adicionar sala</a></li>
							<li><a href="add_professor.php">Adicionar Professor</a></li>
							<li><a href="add_materia.php">Adicionar Disciplina</a></li>
						</ul>
					</div>
				</div>
				<div id="conteudo">
                	<div class="caixa">
                    <h3>Disciplinas Existentes:</h3>
                	<?php
					if (mysql_num_rows($resultado) > 0){
						while($tbl=mysql_fetch_array($resultado)){
							$nome_disciplina = $tbl['NOME_DISCIPLINA'];
							$id = $tbl['ID_DISCIPLINA'];
							echo "<li>Disciplina: ".$nome_disciplina." ";
							echo "<a href='excluir_registro.php?acao=excluirmateria&id=$id'>(x)</a>";
						}
					}else{
						echo "<p>Nenhuma Disciplina encontrada!</p>";
					}
					?>
                    </div>
                    <hr />
					<div class="caixa">
                    <h3>Adicionar Disciplina:</h3>
                    <form name="form" method="post" action="add_registro.php?tipo=materia">
                      <table border="0" align="center">
                        <tr>
                          <th align="right" scope="row">Disciplina:</th>
                          <td><input type="text" name="disciplina" id="disciplina" /></td>
                        </tr>
                        <tr>
                          <th align="right" scope="row">Carga Horária:</th>
                          <td><input type="text" name="carga_hr" id="carga_hr" /></td>
                        </tr>
                        <tr>
                          <th align="right" scope="row">Numeros de Vagas:</th>
                          <td><input type="text" name="numero_vagas" id="numero_vagas" /></td>
                        </tr>
                        <tr>
                          <th align="right" scope="row">Professor:</th>
                          <td><select name="professor" id="professor"><option></option>
                          	<?php
							while($tbl_prof = mysql_fetch_array($resultado_professor)){
								$nome = $tbl_prof['NOME'];
								$id_prof = $tbl_prof['ID_PROFESSOR'];
								echo "<option value='$id_prof'>".$nome;
							}
							?>
                   	      </select></td>
                        </tr>
                        <tr>
                          <th align="right" scope="row">Turma:</th>
                          <td><select name="turma" id="turma"><option></option>
                          	<?php
							while($tbl_turma = mysql_fetch_array($resultado_turma)){
								$nome_turma = $tbl_turma['NOME_CURSO'];
								$id_turma = $tbl_turma['ID_TURMA'];
								if($nome_turma != "")
								echo "<option value='$id_turma'>".$nome_turma;
							}
							?>
                   	      </select></td>
                        </tr>
                        <tr>
                          <th colspan="2" align="center" scope="row"><input type="submit" value="Inserir Disciplina"/></th>
                        </tr>
                      </table>
                    </form>
                    <p>&nbsp;</p>
					</div>
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
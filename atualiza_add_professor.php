<?php 
include("seguranca.php");
protegePagina();

$acao = $_REQUEST['acao'];
if($acao=="atualizarprofessor"){
	$id=$_REQUEST['id'];
	$sql = "SELECT * FROM professor WHERE ID_PROFESSOR = $id";
	$resulto = mysql_query($sql);
	if($tbl=mysql_fetch_array($resulto)){
		$codigo=$tbl["ID_PROFESSOR"];
		$nome=$tbl["NOME"];
		$area=$tbl["AREA_ATUA"];
	}else{
		echo 'registro nao encontrado';
	}
}
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
                    <h3>Adicionar Professor:</h3>
                    <form name="form" method="post" action="efetua_registro.php?tipo=professor">
                      <table border="0" align="center">
                        <tr>
                          <th align="right" scope="row">ID:</th>
                          <td><input type="text" name="id" value="<?php echo $codigo;?>"/></td>
                        </tr>
                        <tr>
                          <th align="right" scope="row">Nome:</th>
                          <td><input type="text" name="professor" value="<?php echo $nome;?>"/></td>
                        </tr>
                        <tr>
                          <th align="right" scope="row">Área de Atuação:</th>
                          <td><input type="text" name="atua" value="<?php echo $area;?>"/></td>
                        </tr>
                        <tr>
                          <th colspan="2" align="center" scope="row"><input type="submit" value="Inserir Professor"/></th>
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
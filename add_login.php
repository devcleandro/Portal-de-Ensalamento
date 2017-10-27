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
		  	<div id="cabecalho">
		  	<div id="logo">
					<h1><a href="index.php">Portal de Ensalamento</a></h1>
			</div>
			</div>
			<div id="pagina">
				<div id="lateral">
                <p>Portal destinado a facilitar os profissionais que precisam de apoio para estabelecer ordem de salas por materias e direcionar os professores para que não haja conflitos de horários e perda de disciplinas em um horário normal.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>
				<div id="conteudo">
				  <form id="login" method="post" action="add_registro.php?tipo=login">
				    <table border="0" align="center">
				      <tr>
				        <th scope="row">Nome:</th>
				        <td><input type="text" name="nome" id="nome" /></td>
			          </tr>
				      <tr>
				        <th scope="row">E-mail:</th>
				        <td><input type="text" name="email" id="email" /></td>
			          </tr>
				      <tr>
				        <th scope="row">Senha:</th>
				        <td><input type="password" name="senha" id="senha" /></td>
			          </tr>
				      <tr>
				        <th colspan="2" scope="row"><input type="submit" value="Inscrever-se" />
			            <input name="Reset" type="reset" value="Reset" /></th>
			          </tr>
			        </table>
				  </form>
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
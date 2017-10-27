<?php
include("seguranca.php");
protegePagina();

$tipo = $_REQUEST['tipo'];

if($tipo == "sala"){
	$numero = $_POST["numero"];
	$bloco= $_POST['bloco'];
	$verifica = mysql_query("SELECT * FROM sala");
	while($tbl = mysql_fetch_array($verifica)){
		$tb_numero = $tbl['NUMERO_SALA'];
		$tb_bloco = $tbl['BLOCO'];
		$teste = 0;
		if($tb_numero == $numero && $tb_bloco == $bloco)
			$teste++;
	}
		$sql = "INSERT INTO sala(NUMERO_SALA, BLOCO) VALUES('$numero','$bloco')";
		if($numero != "" && $bloco != "" && $teste == 0)
			$inserir = mysql_query($sql);
		header("Location:add_sala.php");	
}

if($tipo == "professor"){
	$professor = $_POST['professor'];
	$atua= $_POST['atua'];
	$verifica = mysql_query("SELECT * FROM professor");
	while($tbl = mysql_fetch_array($verifica)){
		$tb_professor = $tbl['NOME'];
		$tb_atua = $tbl['AREA_ATUA'];
		$teste = 0;
		if($tb_professor == $professor && $tb_atua == $atua)
			$teste++;
	}
	$sql = "INSERT INTO professor(NOME, AREA_ATUA, CARGA_HR_T, CARGA_HR_D) VALUES('$professor','$atua',20,6)";
	if($professor != "" && $atua != "" && $teste == 0)
		$inserir = mysql_query($sql);
	header("Location:add_professor.php");
}

if($tipo == "materia"){
	$disciplina = $_POST['disciplina'];
	$carga_hr= $_POST['carga_hr'];
	$numero_vagas = $_POST['numero_vagas'];
	$professor= $_POST['professor'];
	$turma= $_POST['turma'];
	
	$verifica = mysql_query("SELECT * FROM disciplina");
	while($tbl = mysql_fetch_array($verifica)){
		$tb_disciplina = $tbl['NOME_DISCIPLINA'];
		$tb_turma= $tbl['ID_TURMA'];
		$teste = 0;
		if($tb_disciplina == $disciplina && $tb_turma == $turma)
			$teste++;
	}
	$sql_insere = "INSERT INTO disciplina(NOME_DISCIPLINA, CARGA_HR_TOTAL, NUMERO_VAGAS, ID_PROFESSOR, ID_TURMA)VALUES ('$disciplina', '$carga_hr', '$numero_vagas', '$professor', '$turma')";
	if($disciplina != "" && $teste == 0)
		$inserir=mysql_query($sql_insere);
	header("Location:add_materia.php");
}

if($tipo == "turma"){
	$turma =$_POST['turma'];
	$sql_turma = "INSERT INTO turma(NOME_CURSO) VALUES ('$turma')";
	
	$verifica = mysql_query("SELECT * FROM turma");
	while($tbl = mysql_fetch_array($verifica)){
		$tb_turma= $tbl['NOME_CURSO'];
		$teste = 0;
		if($tb_turma == $turma)
			$teste++;
	}
	
	if($turma != "" && $teste == 0)
		$inserir = mysql_query($sql_turma);
	header("Location:criar_ensalamento.php");
}

if($tipo == "aula"){
	$semana =$_POST['semana'];
	$sala =$_POST['sala'];
	$horario =$_POST['horario'];
	$disciplina =$_POST['disciplina'];
	$sql_sala = "INSERT INTO semana_disciplina(ID_SEMANA, ID_SALA, HORARIO_INICIAL, ID_DISCIPLINA) VALUES ('$semana','$sala','$horario','$disciplina')";
	
	$verifica = mysql_query("SELECT * FROM semana_disciplina");
	while($tbl = mysql_fetch_array($verifica)){
		$tb_semana= $tbl['ID_SEMANA'];
		$tb_horario= $tbl['HORARIO_INICIAL'];
		$teste = 0;
		if($tb_semana == $semana && $tb_horario == $horario)
			$teste++;
	}
	
	if($semana != "" && $sala != "" && $horario != "" && $disciplina != "" && $teste == 0)
		$inserir = mysql_query($sql_sala);
	header("Location:visul_hora.php");
}

if($tipo == "login"){
	$nome =$_POST['nome'];
	$email =$_POST['email'];
	$senha =$_POST['senha'];
	$sql_login = "INSERT INTO login(nome, email, senha) VALUES ('$nome','$email','$senha')";
	
	$verifica = mysql_query("SELECT * FROM login");
	while($tbl = mysql_fetch_array($verifica)){
		$tb_nome= $tbl['nome'];
		$teste = 0;
		if($tb_nome == $tnome)
			$teste++;
	}
	
	if($nome != "" || $teste == 0)
		$inserir = mysql_query($sql_login);
	header("Location:criar_ensalamento.php");
}
?>

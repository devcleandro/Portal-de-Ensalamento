<?php
include("seguranca.php");
protegePagina();

$tipo = $_REQUEST['tipo'];
if($tipo =="turma"){
	$id=$_POST['id'];
	$turma=$_POST['turma'];
	$sql = "UPDATE turma SET NOME_CURSO='$turma' WHERE ID_TURMA = $id";
	$resulto = mysql_query($sql);

	if(!$resulto){
		die('Erro: ' .mysql_error());
	}
	header("Location:criar_ensalamento.php");
}
if($tipo =="sala"){
	$id=$_POST['id'];
	$bloco=$_POST['bloco'];
	$numero=$_POST['numero'];
	$sql = "UPDATE sala SET BLOCO='$bloco', NUMERO_SALA='$numero' WHERE ID= $id";
	$resulto = mysql_query($sql);

	if(!$resulto){
		die('Erro: ' .mysql_error());
	}
	header("Location:add_sala.php");
}
if($tipo =="professor"){
	$id=$_POST['id'];
	$professor=$_POST['professor'];
	$atua=$_POST['atua'];
	$sql = "UPDATE professor SET NOME='$professor', AREA_ATUA='$atua' WHERE ID_PROFESSOR= $id";
	$resulto = mysql_query($sql);

	if(!$resulto){
		die('Erro: ' .mysql_error());
	}
	header("Location:add_professor.php");
}
?>
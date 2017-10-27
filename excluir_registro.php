<?php
include("seguranca.php");
protegePagina();

$acao = $_REQUEST['acao'];

if($acao=="excluirturma"){
	$Codigo=$_REQUEST['id'];
	$sql = "DELETE FROM turma WHERE ID_TURMA = $Codigo";
	$resulto = mysql_query($sql);

	if(!$resulto){
		die('Erro: ' .mysql_error());
		}
	header("Location:criar_ensalamento.php");
}

if($acao=="excluirmateria"){
	$Codigo=$_REQUEST['id'];
	$sql = "DELETE FROM disciplina WHERE ID_DISCIPLINA = $Codigo";
	$resulto = mysql_query($sql);

	if(!$resulto){
		die('Erro: ' .mysql_error());
		}
	header("Location:add_materia.php");
}

if($acao=="excluirprofessor"){
	$Codigo=$_REQUEST['id'];
	$sql = "DELETE FROM professor WHERE ID_PROFESSOR = $Codigo";
	$resulto = mysql_query($sql);

	if(!$resulto){
		die('Erro: ' .mysql_error());
		}
	header("Location:add_professor.php");
}

if($acao=="excluirsala"){
	$Codigo=$_REQUEST['id'];
	$sql = "DELETE FROM sala WHERE NUMERO_SALA = $Codigo";
	$resulto = mysql_query($sql);

	if(!$resulto){
		die('Erro: ' .mysql_error());
		}
	header("Location:add_sala.php");
}


?>
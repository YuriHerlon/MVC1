<?php


require '../model/Calculadora.php';

$funcao = $_GET['funcao'];

$funcao();

function minhafuncao(){
	$msg = '';
	if(isset($_GET['msg']))
		$msg = $_GET['msg'];
	include '../view/minhafuncao.php';
}

function outrafuncao(){
	$msg = '';
	if(isset($_GET['msg']))
		$msg = $_GET['msg'];
	include '../view/outrafuncao.php';
}

function formulario(){
	include '../view/formulario.php';
}

function formularioR2G(){
	include '../view/formularioR2G.php';
}


function soma(){
	$tipo = 'SOMA';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::somar($n1,$n2);
	include '../view/resultado.php';
}

function subtrair(){
	$tipo = 'SUBTRAÇÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::subtrair($n1,$n2);
	include '../view/resultado.php';
}

function multiplicar(){
	$tipo = 'MULTIPLICAÇÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::multiplicar($n1,$n2);
	include '../view/resultado.php';
}

function dividir(){
	$tipo = 'DIVISÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$resultado = Calculadora::dividir($n1,$n2);
	include '../view/resultado.php';
}

function raizes2grau(){
	$tipo = 'DIVISÃO';
	$n1 = '';
	if(isset($_GET['n1']))
		$n1 = $_GET['n1'];
	$n2 = '';
	if(isset($_GET['n2']))
		$n2 = $_GET['n2'];	
	$n3 = '';
	if(isset($_GET['n3']))
		$n3 = $_GET['n3'];		
	
	$resultado = Calculadora::raizes2grau($n1,$n2,$n3);
	include '../view/resultado.php';
}

function formcliente(){
	include '../view/formcliente.php';
}

function salvar(){
	$nome= $_GET['nome'];
	$datanasc= $_GET['datanasc'];
	include '../view/resultadoCliente.php';
}

?>	
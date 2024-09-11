<?php

session_start();
require_once 'Aluno.php';

$nome = $_GET['nome'];
$nascimento = $_GET['nascimento'];
$curso = $_GET['curso'];
$matricula = $_GET['matricula'];

$aluno = new Aluno($nome, $nascimento, $curso, $matricula);

$_SESSION['aluno'] = serialize($aluno);

header('Location: Mostra.php');
exit;
?>

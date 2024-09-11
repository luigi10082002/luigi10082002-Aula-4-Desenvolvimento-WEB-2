<?php

session_start();
require_once 'Aluno.php';

if (isset($_SESSION['aluno'])) {
    $aluno = unserialize($_SESSION['aluno']);
    echo "<h1>Dados do Aluno</h1>";
    echo "Nome: " . $aluno->getNome() . "<br>";
    echo "Data de Nascimento: " . $aluno->getNascimento() . "<br>";
    echo "Curso: " . $aluno->getCurso() . "<br>";
    echo "Matrícula: " . $aluno->getMatricula() . "<br>";
    echo '<a href="Mostra_Idade.php">Mostrar Idade</a><br>';
    echo '<a href="Sair.php">Sair</a>';
} else {
    echo "Nenhum dado de aluno encontrado.";
}
?>

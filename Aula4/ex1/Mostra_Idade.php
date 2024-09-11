<?php

session_start();
require_once 'aluno.php';

if (isset($_SESSION['aluno'])) {
    $aluno = unserialize($_SESSION['aluno']);
    $nome = $aluno->getNome();
    $idade = $aluno->idade();
    echo "<h1>Idade do Aluno</h1>";
    echo "$nome, $idade anos<br>";
    echo '<a href="Mostra.php">Voltar</a><br>';
    echo '<a href="Sair.php">Sair</a>';
} else {
    echo "Nenhum dado de aluno encontrado.";
}
?>

<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Aluno</title>
</head>
<body>
    <h1>Formulário de Cadastro de Aluno</h1>
    <form action="Recebe.php" method="get">
        Nome: <input type="text" name="nome" required><br>
        Data de Nascimento: <input type="date" name="nascimento" required><br>
        Curso: <input type="text" name="curso" required><br>
        Matrícula: <input type="text" name="matricula" required><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

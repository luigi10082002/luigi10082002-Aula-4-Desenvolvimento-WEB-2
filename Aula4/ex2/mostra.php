<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container mt-4">
        <h1>Dados da Sessão</h1>
        <?php if (isset($_SESSION['nome']) && isset($_SESSION['idade'])): ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informações do Formulário</h5>
                    <p class="card-text"><strong>Nome:</strong> <?php echo htmlspecialchars($_SESSION['nome']); ?></p>
                    <p class="card-text"><strong>Idade:</strong> <?php echo htmlspecialchars($_SESSION['idade']); ?></p>
                </div>
            </div>
        <?php else: ?>
            <p>Nenhum dado encontrado na sessão.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

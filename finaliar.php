<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Finalizar Pedido - Delivery de Pizzas UNIFAA</title>
</head>
<body>
    <header>
        <h1>Finalização do Pedido</h1>
        <nav>
            <a href="menu.php">Cardápio</a>
        </nav>
    </header>
    <main>
        <h2>Complete seu pedido</h2>
        <form action="processar_pedido.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
            <input type="hidden" name="carrinho" value="<?php echo implode(',', $_SESSION['carrinho']); ?>">
            <button type="submit">Confirmar Pedido</button>
        </form>
    </main>
</body>
</html>

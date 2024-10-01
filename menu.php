<?php
include 'db.php';

$query = $pdo->query("SELECT * FROM pizzas");
$pizzas = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cardápio - Delivery de Pizzas UNIFAA</title>
</head>
<body>
    <header>
        <h1>Cardápio</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="carrinho.php">Carrinho</a>
        </nav>
    </header>
    <main>
        <h2>Pizzas Disponíveis</h2>
        <ul>
            <?php foreach ($pizzas as $pizza): ?>
                <li>
                    <h3><?php echo $pizza['nome']; ?></h3>
                    <p><?php echo $pizza['descricao']; ?></p>
                    <p>Preço: R$ <?php echo number_format($pizza['preco'], 2, ',', '.'); ?></p>
                    <form action="carrinho.php" method="post">
                        <input type="hidden" name="pizza_id" value="<?php echo $pizza['id']; ?>">
                        <button type="submit">Adicionar ao Carrinho</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>

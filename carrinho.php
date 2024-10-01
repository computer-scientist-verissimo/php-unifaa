session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pizza_id = $_POST['pizza_id'];
    $_SESSION['carrinho'][] = $pizza_id; // Adiciona pizza ao carrinho
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Carrinho - Delivery de Pizzas UNIFAA</title>
</head>
<body>
    <header>
        <h1>Carrinho de Compras</h1>
        <nav>
            <a href="menu.php">Cardápio</a>
            <a href="finalizar.php">Finalizar Pedido</a>
        </nav>
    </header>
    <main>
        <h2>Itens no Carrinho</h2>
        <ul>
            <?php foreach ($_SESSION['carrinho'] as $pizza_id): ?>
                <li>
                    <p>Pizza ID: <?php echo $pizza_id; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="finalizar.php"><button>Finalizar Pedido</button></a>
    </main>
</body>
</html>

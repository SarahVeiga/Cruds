<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumaria</title>
    <link rel="stylesheet" href="style.css"> <!-- Linkando o CSS -->
</head>
<body>
    <h1>Perfumaria Feminina</h1>

    <!-- Formulário de cadastro -->
    <form action="store.php" method="POST">
        <label for="produto">Produto:</label>
        <input type="text" id="produto" name="produto" required>

        <label for="concentracao">Concentração:</label>
        <input type="text" id="concentracao" name="concentracao" required>

        <label for="notas_principais">Notas principais:</label>
        <input type="text" id="notas_principais" name="notas_principais" required>

        <label for="base">Base:</label>
        <input type="text" id="base" name="base" required>

        <label for="tipo">Tipo:</label>
        <input type="Text" id="tipo" name="tipo" required>

        <label for="marca">Marca:</label>
        <input type="Text" id="marca" name="marca" required>

        <label for="valor">Valor:</label>
        <input type="Numeric" id="valor" name="valor" required>

        <label for="quantidade">Quantidade:</label>
        <input type="Numeric" id="quantidade" name="quantidade" required>

        <input type="submit" value="Cadastrar produto">
    </form>

    <hr>

    <!-- Lista de produtos -->
    <h2>Cadastre-se para acessar os produtos</h2>

    <div>
        <?php include 'read.php'; ?>
    </div>
</body>
</html>
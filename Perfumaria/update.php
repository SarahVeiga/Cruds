<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM descricao_produtos WHERE id=$id"; // Consulta o produto
    $result = $conn->query($sql); // Executa a consulta
    $descricao_produtos = $result->fetch_assoc(); // Obtém os dados do produto
}

// O formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto']; 
    $concentracao = $_POST['concentracao']; 
    $notas_principais = $_POST['notas_principais']; 
    $base = $_POST['base']; 
    $tipo = $_POST['tipo']; 
    $marca = $_POST['marca']; 
    $valor = $_POST['valor']; 
    $quantidade = $_POST['quantidade']; 

    $sql = "UPDATE descricao_produtos SET produto='$produto', concentracao='$concentracao', notas_principais='$notas_principais',base='$base',tipo='$tipo',marca='$marca',valor='$valor',quantidade='$quantidade' WHERE id=$id"; // Preparando a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona a atualização para bem-sucedida
    } else {
        echo "Erro: " . $conn->erro; // Mostra erro, se houver
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar Produto</title>
</head>
<body>
    <h1>Atualizar produto</h1>
    <form action="" method="POST">

        <label>Produto:</label>
        <input type="text" name="produto" value="<?php echo $descricao_produtos['produto']; ?>" required>

        <label>Concentracao:</label>
        <input type="text" name="concentracao" value="<?php echo $descricao_produtos['concentracao']; ?>" required>

        <label>Notas_principais:</label>
        <input type="text" name="notas_principais" value="<?php echo $descricao_produtos['notas_principais']; ?>" required>

        <label>Base:</label>
        <input type="text" name="base" value="<?php echo $descricao_produtos['base']; ?>" required>

        <label>Tipo:</label>
        <input type="text" name="tipo" value="<?php echo $descricao_produtos['tipo']; ?>" required>

        <label>Marca:</label>
        <input type="text" name="marca" value="<?php echo $descricao_produtos['marca']; ?>" required>

        <label>Valor:</label>
        <input type="Numeric" name="valor" value="<?php echo $descricao_produtos['valor']; ?>" required>

        <label>Quantidade:</label>
        <input type="Numeric" name="quantidade" value="<?php echo $descricao_produtos['quantidade']; ?>" required>

        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>
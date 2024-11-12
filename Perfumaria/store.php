<?php
include 'conexao.php';
// Configuração do banco de dados (ajuste com seus dados)
$host = 'localhost';
$db = 'perfumaria';
$user = 'root';
$pass = ''; // Deixe vazio se não houver senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Receber os dados do formulário
        $produto = $_POST['produto'];
        $concentracao = $_POST['concentracao'];
        $notas_principais = $_POST['notas_principais'];
        $base = $_POST['base'];
        $tipo = $_POST['tipo'];
        $marca = $_POST['marca'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];

        // Preparar e executar a inserção no banco de dados
        $stmt = $pdo->prepare("INSERT INTO descricao_produtos (produto, concentracao,notas_principais, base, tipo, marca, valor, quantidade ) VALUES (:produto, :concentracao, :notas_principais, :base, :tipo, :marca, :valor, :quantidade,)");
        $stmt->bindParam(':produto', $produto);
        $stmt->bindParam(':concentracao', $concentracao);
        $stmt->bindParam(':notas_principais', $notas_principais);
        $stmt->bindParam(':base', $base);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':quantidade', $quantidade);
        

        if ($stmt->execute()) {
            echo "<p>Produto cadastrado com sucesso!</p>";
        } else {
            echo "<p>Erro ao cadastrar produto.</p>";
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

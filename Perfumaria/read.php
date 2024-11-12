
<?php
include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM descricao_produtos"; // Consulta todos os produtos
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'><tr><th>Id</th><th>Produto</th><th>Concentracao</th><th>Notas_principais</th><th>Base</th><th>Tipo</th><th>Marca</th><th>Valor</th><th>Quantidade</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada produto
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["produto"] . "</td>
                <td>" . $row["concentracao"] . "</td>
                <td>" . $row["notas_principais"] . "</td>
                <td>" . $row["base"] . "</td>
                <td>" . $row["tipo"] . "</td>
                <td>" . $row["marca"] . "</td>
                <td>" . $row["valor"] . "</td>
                <td>" . $row["quantidade"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhum produto encontrado."; // Mensagem se não houver produtos
}
?>
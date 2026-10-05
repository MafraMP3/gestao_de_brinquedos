<?php
include "../infra/database/conexao.php";

$id = isset($_GET["id"]) ? (int)$_GET["id"] : null;

if (!$id) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $faixaEtaria = $_POST["faixaEtaria"];
    $preco = $_POST["preco"];
    $quantiaEstoque = $_POST["quantiaEstoque"];

    if ($nome == null || $categoria == null || $faixaEtaria == null || $preco == null || $quantiaEstoque == null) {
        echo "<script>
            alert('Não é permitido deixar campos vazios');
            window.location.href = 'editar.php?id=$id';
        </script>";
        exit();
    }

    $sql = "UPDATE brinquedos SET nome = ?, categoria = ?, faixaEtaria = ?, preco = ?, quantiaEstoque = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssdii", $nome, $categoria, $faixaEtaria, $preco, $quantiaEstoque, $id);

    if ($stmt->execute()) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao editar: " . $stmt->error;
    }
}

$sql = "SELECT * FROM brinquedos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$brinquedo = $resultado->fetch_assoc();

if (!$brinquedo) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar brinquedo</title>
</head>
<body>

    <h1>Editar brinquedo</h1>

    <form method="POST">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $brinquedo["nome"]; ?>" required>
        <br><br>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" value="<?php echo $brinquedo["categoria"]; ?>" required>
        <br><br>

        <label for="faixaEtaria">Faixa Etária:</label>
        <select name="faixaEtaria" id="faixaEtaria" required>
            <option value="Infantil" <?php if ($brinquedo["faixaEtaria"] == "Infantil") echo "selected"; ?>>Infantil</option>
            <option value="Infantojuvenil" <?php if ($brinquedo["faixaEtaria"] == "Infantojuvenil") echo "selected"; ?>>Infantojuvenil</option>
            <option value="Adulto" <?php if ($brinquedo["faixaEtaria"] == "Adulto") echo "selected"; ?>>Adulto</option>
        </select>
        <br><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" value="<?php echo $brinquedo["preco"]; ?>" required>
        <br><br>

        <label for="quantiaEstoque">Quantia em Estoque:</label>
        <input type="number" name="quantiaEstoque" value="<?php echo $brinquedo["quantiaEstoque"]; ?>" required>
        <br><br>

        <input type="submit" value="Salvar alterações">

    </form>

</body>
</html>
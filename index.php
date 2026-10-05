<?php
include "../infra/database/conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de brinquedos</title>
</head>
<body>
    <h1>Gerenciomento de brinquedos</h1>
    <h3>Cadastre um novo brinquedo</h3>

    <form method="POST">

        <label for="nome">Nome:</label>
        <input type="nome" name="nome" placeholder="Digite o nome do brinquedo" required><br><br>

        <label for="categoria">Categoria:</label>
        <input type="categoria" name="categoria" placeholder="Digite a categoria do brinquedo" required><br><br>

        <label for="faixaEtaria">Faixa Etária:</label>
        <input type="faixaEtaria" name="faixaEtaria" placeholder="Digite a faixa etária do brinquedo" required><br><br>

        <label for="preco">Preço:</label>
        <input type="preco" name="preco" placeholder="Digite o preço do brinquedo" required><br><br>

        <label for="quantiaEstoque">Quantia em Estoque:</label>
        <input type="quantiaEstoque" name="quantiaEstoque" placeholder="Digite a quantidade em estoque do brinquedo" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>
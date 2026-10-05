<?php 
include "../infra/database/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$faixaEtaria = $_POST["faixaEtaria"];
$preco = $_POST["preco"];
$quantiaEstoque = $_POST["quantiaEstoque"];

if ($nome == null || $categoria == null || $faixaEtaria == null || $preco == null || $quantiaEstoque == null){
    echo "<script>
          alert('Erro no cadastro de brinquedos, não é permitido campos vazios');
          window.location.href = 'index.php'
          </script>";
    die();
}


$sql = "INSERT INTO brinquedos (nome,categoria,faixaEtaria,preco,quantiaEstoque) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssdi", $nome,$categoria,$faixaEtaria,$preco,$quantiaEstoque);

if ($stmt->execute()) {
    echo "brinquedo cadastrado com sucesso";
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}


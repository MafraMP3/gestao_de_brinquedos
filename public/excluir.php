<?php
include "../infra/conexao.php";
$id = isset($_GET["id"]) ? (int)$_GET["id"] : null;
$sql = "DELETE FROM brinquedos WHERE id = ?";

if ($id) {
    $sql = "DELETE FROM brinquedos WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->closedir(); 
    }
}
header("location: index.php");
exit();
?>
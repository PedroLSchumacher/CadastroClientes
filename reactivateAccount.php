<?php

include_once 'php_action/db_connect.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $updateSql = "UPDATE clientes SET status = 1 WHERE id = $id";

    if ($connect->query($updateSql) === TRUE) {
        echo "Status da conta do cliente alterado para ativo com sucesso";
    } else {
        echo "Erro ao alterar o status da conta do cliente: " . $connect->error;
    }
} else {
    echo "ID do cliente não fornecido na URL";
}

$connect->close();
?>
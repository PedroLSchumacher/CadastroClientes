<?php

include_once 'php_action/db_connect.php';


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $selectSql = "SELECT status FROM clientes WHERE id = $id";
    $result = $connect->query($selectSql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentStatus = $row['status'];
        $newStatus = ($currentStatus == 1) ? 0 : 1;
        $updateSql = "UPDATE clientes SET status = $newStatus WHERE id = $id";

        if ($connect->query($updateSql) === TRUE) {

            echo "Status da conta do cliente alterado com sucesso";
        } else {
            echo "Erro ao alterar o status da conta do cliente: " . $connect->error;
        }
    } else {
        echo "Cliente não encontrado com o ID fornecido";
    }
} else {
    echo "ID do cliente não fornecido na URL";
}

$connect->close();
?>
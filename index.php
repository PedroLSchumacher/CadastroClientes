<?php
include_once 'php_action/db_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Listar Clientes</title>
    <script src="./js/js.js"></script>
</head>
<body>
    <div class="main">
        <h2>Lista de Clientes</h2>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="insertC.php">
                <input class="btn btn-primary me-md-2" type="button" value="Cadastrar Cliente">
            </a>
        </div>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>DDD</th>
                <th>Telefone celular</th>
                <th>Data de Nascimento</th>
                <th>Estado Civil</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Data emissão RG</th>
                <th>Status</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                    $select = $connect->query("SELECT * FROM clientes");
                    while($dados = $select->fetch_assoc()):
                        $id = $dados['id'];
                        $nome = $dados['nome'];
                        $sobrenome = $dados['sobrenome'];
                        $email = $dados['email'];
                        $ddd = $dados['ddd'];
                        $tel_celular = $dados['tel_celular'];
                        // Formatar a data para o formato dd/mm/aaaa
                        $data_nascimento = date('d/m/Y', strtotime($dados['data_nascimento']));
                        $est_civil = $dados['est_civil'];
                        $cpf = $dados['cpf'];
                        $rg = $dados['rg'];
                        // Formatar a data de emissão para o formato dd/mm/aaaa
                        $emissao_rg = date('d/m/Y', strtotime($dados['emissao_rg']));
                        // Obtém o status do cliente
                        $currentStatus = $dados['status'];
                        
                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$nome</td>";
                        echo "<td>$sobrenome</td>";
                        echo "<td>$email</td>";
                        echo "<td>$ddd</td>";
                        echo "<td>$tel_celular</td>";
                        echo "<td>$data_nascimento</td>";
                        echo "<td>$est_civil</td>";
                        echo "<td>$cpf</td>";
                        echo "<td>$rg</td>";
                        echo "<td>$emissao_rg</td>";
                        echo "<td>";
                        // Verifica o status do cliente e exibe o ícone apropriado
                        if ($currentStatus == 0) {
                            echo "<img id='icon$id' src='./img/caminho_para_led_verde.png' alt='Ativo' width='20' height='20'>";
                            echo "<button onclick='confirmChangeStatus($id, 0)'>Desativar Conta</button>";
                        } else {
                            echo "<img id='icon$id' src='./img/caminho_para_led_vermelho.png' alt='Inativo' width='20' height='20'>";
                            echo "<button onclick='confirmChangeStatus($id, 1)'>Reativar Conta</button>";
                        }
                        echo "</td>";
                        // Verifica o status do cliente antes de exibir o botão de editar
                        if ($currentStatus == 0) {
                            echo "<td><a href='editC.php?id=$id'><button>Editar</button></a></td>";
                        } else {
                            echo "<td>";
                            echo "<button onclick=\"alert('Este cliente está desativado. Você precisa reativá-lo para poder editá-lo.');\">Editar</button>";
                            echo "</td>";
                        }
                        echo "</tr>";
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include_once 'php_action/db_connect.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Função para verificar se um campo está vazio
    function isEmpty($value) {
        return empty($value) ? true : false;
    }

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $ddd = $_POST['ddd'];
    $tel_celular = $_POST['tel_celular'];
    $data_nascimento = $_POST['data_nascimento'];
    $est_civil = $_POST['est_civil'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $emissao_rg = $_POST['emissao_rg'];

    // Verificar se algum campo está vazio
    if (isEmpty($nome) || isEmpty($sobrenome) || isEmpty($email) || isEmpty($ddd) || isEmpty($tel_celular) || isEmpty($data_nascimento) || isEmpty($est_civil) || isEmpty($cpf) || isEmpty($rg) || isEmpty($emissao_rg)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        $sql = "UPDATE clientes SET nome='$nome', sobrenome='$sobrenome', email='$email', ddd='$ddd', tel_celular='$tel_celular',data_nascimento='$data_nascimento', est_civil='$est_civil', cpf='$cpf', rg='$rg', emissao_rg='$emissao_rg' WHERE id=$id";

        if ($connect->query($sql) === TRUE) {
           echo "Cliente atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o cliente: " . $connect->error;
       }
    }
}

$result = $connect->query("SELECT * FROM clientes WHERE id=$id");
if ($result && $result->num_rows > 0) {

    $cliente = $result->fetch_array(MYSQLI_ASSOC);
    
    $nome = $cliente['nome'] ?? '';
    $sobrenome = $cliente['sobrenome'] ?? '';
    $email = $cliente['email'] ?? '';
    $ddd = $cliente['ddd'] ?? '';
    $tel_celular = $cliente['tel_celular'] ?? '';
    $data_nascimento = $cliente['data_nascimento'] ?? '';
    $est_civil = $cliente['est_civil'] ?? '';
    $cpf = $cliente['cpf'] ?? '';
    $rg = $cliente['rg'] ?? '';
    $emissao_rg = $cliente['emissao_rg'] ?? '';
} else {
    echo "Cliente não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styleedit.css">
    <title>Editar Cliente</title>
    <script src="js/js.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h2 class="text-center">Editar Cliente</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$id");?>" id="editForm" onsubmit="return validarEditC()">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sobrenome" class="form-label">Sobrenome:</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php echo $sobrenome; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ddd" class="form-label">DDD:</label>
                                <input type="text" class="form-control" id="ddd" name="ddd" value="<?php echo $ddd; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tel_celular" class="form-label">Telefone Celular:</label>
                                <input type="text" class="form-control" id="tel_celular" name="tel_celular" value="<?php echo $tel_celular; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="est_civil" class="form-label">Estado Civil:</label>
                                <input type="text" class="form-control" id="est_civil" name="est_civil" value="<?php echo $est_civil; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="rg" class="form-label">RG:</label>
                                <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $rg; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="emissao_rg" class="form-label">Data de emissão:</label>
                                <input type="date" class="form-control" id="emissao_rg" name="emissao_rg" value="<?php echo $emissao_rg; ?>">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input type="submit" class="btn btn-primary me-md-2" value="Atualizar">
                                <a href="index.php" class="btn btn-secondary">Listar Clientes</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>
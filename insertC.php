<?php
include_once 'php_action/create.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleinsert.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/js.js"></script>
    <title>Cadastrar Clientes</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header custom-header">
                <h2 class="card-title text-center">Cadastro de Clientes</h2>
            </div>
            <div class="card-body">
                <form action="php_action/create.php" method="post" onsubmit="return validarInsertC()">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input class="form-control input_info" name="nome" id="nome" placeholder="Nome" type="text">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="sobrenome" class="form-label">Sobrenome:</label>
                        <input class="form-control input_info" name="sobrenome" id="sobrenome" placeholder="Sobrenome" type="text">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input class="form-control input_info" name="email" id="email" placeholder="E-mail do usuário" type="email">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="ddd" class="form-label">DDD:</label>
                        <input class="form-control input_info" name="ddd" id="ddd" placeholder="Ex: 051" type="number" maxlength="3">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="tel_celular" class="form-label">Telefone Celular:</label>
                        <input class="form-control input_info" name="tel_celular" id="tel_celular" placeholder="Ex: 987654321" type="number" maxlength="9">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                        <input class="form-control input_info" name="data_nascimento" id="data_nascimento" type="date">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="est_civil" class="form-label">Estado Civil:</label>
                        <input class="form-control input_info" name="est_civil" id="est_civil" placeholder="Estado civil do cliente" type="text">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input class="form-control input_info" name="cpf" id="cpf" placeholder="Apenas dígitos numéricos (11)" type="tel" maxlength="11">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="rg" class="form-label">RG:</label>
                        <input class="form-control input_info" name="rg" id="rg" placeholder="Apenas dígitos numéricos (10)" type="tel" maxlength="10">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="emissao_rg" class="form-label">Data de emissão da identidade:</label>
                        <input class="form-control input_info" name="emissao_rg" id="emissao_rg" type="date">
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary me-md-2" type="submit" name="cadastrar">Cadastrar</button>
                        <a href="index.php" class="btn btn-secondary">Listar Clientes</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
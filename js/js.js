
function confirmChangeStatus(id, newStatus) {

    var confirmMessage = (newStatus == 0) ? 'Tem certeza que deseja desativar esta conta?' : 'Tem certeza que deseja reativar esta conta?';
    if (confirm(confirmMessage)) {

        changeStatus(id, newStatus);
    }
}

function changeStatus(id, newStatus) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            location.reload();
        }
    };

    var url = (newStatus == 0) ? "reactivateAccount.php?id=" : "changeStatus.php?id=";
    xhttp.open("GET", url + id, true);
    xhttp.send();
}

function validarInsertC() {
    var inputs = document.querySelectorAll('.input_info');
    var isValid = true;
    inputs.forEach(function(input) {
        if (input.value.trim() === '') {
            isValid = false;
            input.classList.add('is-invalid');
        } else {
            input.classList.remove('is-invalid');
        }
    });
    return isValid;
}

function validarEditC() {

    var nome = document.getElementById("nome").value;
    var sobrenome = document.getElementById("sobrenome").value;
    var email = document.getElementById("email").value;
    var ddd = document.getElementById("ddd").value;
    var tel_celular = document.getElementById("tel_celular").value;
    var data_nascimento = document.getElementById("data_nascimento").value;
    var est_civil = document.getElementById("est_civil").value;
    var cpf = document.getElementById("cpf").value;
    var rg = document.getElementById("rg").value;
    var emissao_rg = document.getElementById("emissao_rg").value;

    if (nome === "" || sobrenome === "" || email === "" || ddd === "" || tel_celular === "" || data_nascimento === "" || est_civil === "" || cpf === "" || rg === "" || emissao_rg === "") {
        alert("Por favor, preencha todos os campos.");
        return false; 
    }
    return true; 
}
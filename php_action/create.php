<?php
include_once "db_connect.php";

if(isset($_POST['cadastrar'])){
   $nome = mysqli_escape_string($connect, $_POST['nome']);
   $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
   $email = mysqli_escape_string($connect, $_POST['email']);
   $ddd = mysqli_escape_string($connect, $_POST['ddd']);
   $tel_celular = mysqli_escape_string($connect, $_POST['tel_celular']);
   $data_nascimento = mysqli_escape_string($connect, $_POST['data_nascimento']);
   $est_civil = mysqli_escape_string($connect, $_POST['est_civil']);
   $cpf = mysqli_escape_string($connect, $_POST['cpf']);
   $rg = mysqli_escape_string($connect, $_POST['rg']);
   $emissao_rg = mysqli_escape_string($connect, $_POST['emissao_rg']);

   $sql = "INSERT INTO clientes (nome, sobrenome, email, ddd, tel_celular, data_nascimento, est_civil, cpf, rg, emissao_rg) VALUES ('$nome', '$sobrenome', '$email', '$ddd', '$tel_celular', '$data_nascimento', '$est_civil', '$cpf', '$rg', '$emissao_rg')";

   if(mysqli_query($connect, $sql)){
    echo "Cadastrado com sucesso!";
    header( "refresh:1;url=http://localhost/crud/index.php" );
    
   } else{
    echo "Erro no cadastro!";
    
   }
}
?>

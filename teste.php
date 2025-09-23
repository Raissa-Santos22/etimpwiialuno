<?php 
require 'Aluno.class.php';

$rm = $_POST['rm'];
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$cpf = $_POST['cpf'];

$ok = $aluno = new Aluno();
$con = $aluno->conectar();

if($con){
    $aluno->cadastrar($rm, $nome, $email, $cpf);
    echo '<script> Aluno inserido com sucesso!</script>';
}else{
    echo "<script> Erro ao inserir o aluno. Tente novamente mais tarde";
}

?>
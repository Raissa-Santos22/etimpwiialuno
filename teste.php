<?php
require 'Aluno.class.php';
$aluno = new Aluno();

    if(isset ($_POST['cadastro'])){
        $rm = $_POST ['rm'];
        $nome = $_POST ['nome'];
        $email = $_POST ['email'];
        $senha = $_POST ['senha'];
        $cpf = $_POST ['cpf'];

       $ok = $aluno->cadastrar($rm, $nome, $email, $senha, $cpf);
        if($ok){
            echo "<script> Aluno cadastrado com sucesso!";
        }else{
            echo "Erro no banco.Tente novamente mais tarde";
        }
  }
      



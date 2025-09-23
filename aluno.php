<?php
require 'Aluno.class.php';
$aluno = new Aluno();

$con = $aluno->conectar();

if( $con ){
    $al = $aluno->consultar("kiky@gmail.com");
    if(!$al ){
        $aluno->cadastrar(4368, "Quiteria", "kiky@gmail.com", "1234" ,"000.111.222-33");
    }else{
        echo "<script>alert('Esse aluno já está cadastrado')</script>";
    }
} else{
    echo"<script>alert('Sem conexão com o banco. Tente novamente mais tarde')<script>";
}
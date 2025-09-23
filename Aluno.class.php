<?php

class Aluno{
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $pdo;

    public function conectar(){
       $dns = "mysql:dbname=etimpwiialuno;host=localhost";
       $dbUser = "root";
       $dbpass = "";

       try {
        $this->pdo = new PDO($dns, $dbUser, $dbpass);
        return true;
       } catch (\Throwable $th) {
         return false;
       }
    }

    public function getId(){
        return $this-> id;
    }

    
    public function getRm(){
        return $this-> rm;
    }

    
    public function getNome(){
        return $this-> nome;
        
    }

    
    public function getEmail(){
        return $this-> email;
    }

    
    public function getCpf(){
        return $this-> cpf;
    }

    public function setRm($rm){
        $this-> rm = $rm;
    }

   
    public function setNome($nome){
        $this->nome = $nome;
    }

    
    public function setEmail($email){
        $this->email = $email;
    }

    
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function cadastrar($rm, $nome, $email, $senha, $cpf){
        $sql = "INSERT INTO aluno set rm = :r, nome = :n, email = :e, senha =: s cpf = :c";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(":r", $rm);
        $sql-> bindValue(":n", $nome);
        $sql-> bindValue(":s", $senha);
        $sql-> bindValue(":e", $email);
        $sql-> bindValue(":c", $cpf);

        return $sql->execute();
    }

    public function consultar($email){
        $sql = "SELECT * FROM aluno WHERE email = :e";

        $sql = $this->pdo->prepare($sql);

        $sql-> bindValue(":e", $email);

        $sql-> execute();

        return $sql->rowCount() > 0;
    }
}
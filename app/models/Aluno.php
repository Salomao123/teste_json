<?php 

class Aluno {
  private $id;
  private $nome;
  private $altura;
  private $idade;

  function __construct($nome, $altura, $idade){
    $this->nome = $nome;
    $this->altura = $altura;
    $this->idade = $idade;
  }

  function getNome(){
    return $this->nome;
  }

  function getAltura(){
    return $this->altura;
  }

  function getIdade(){
    return $this->idade;
  }

}
?>
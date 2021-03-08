<?php

include_once '/home/carolinab/Documents/Exercicio_8/index.php';

class Pessoa {
  private $nome;
  private $sexo;
  private $idade;

  function __construct($nome, $sexo, $idade) {
    $this->nome = $nome;
    $this->sexo = $sexo;
    $this->idade = $idade;
  }
  function fazerAniversario() {
    $this->idade = $this->idade + 1;
  }
  function SetNome($nome) {
    if (is_string ($nome)) {
      $this->nome = $nome;
   }
  }
  function GetNome() {
   return $this->nome;
  }
  function SetSexo($sexo) {
    if (is_string ($sexo)) {
      $this->sexo = $sexo;
    }
  }
  function GetSexo() {
    return $this->sexo;
   }
   function SetIdade($idade) {
    if (is_numeric($idade)) {
      $this->idade = $idade;
    }
  }
  function GetIdade() {
    return $this->idade;
   }
}

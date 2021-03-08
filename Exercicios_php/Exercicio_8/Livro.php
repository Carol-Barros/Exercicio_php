<?php
include_once '/home/carolinab/Documents/Exercicio_8/Publicacao.php';
include_once '/home/carolinab/Documents/Exercicio_8/Pessoa.php';


class Livro implements Publicacao
{
  private $titulo;
  private Pessoa $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;
  
  

  function __construct($titulo, Pessoa $autor, $totPaginas, $pagAtual, $aberto, $leitor) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totPaginas = $totPaginas;
    $this->pagAtual = $pagAtual;
    $this->aberto = $aberto;
    $this->leitor = $leitor;
  }    
  function SetTitulo($titulo) {
    if (is_string ($titulo)) {
      $this->titulo = $titulo;
   }
  }
  function GetTitulo() {
   return $this->titulo;
  }
  function SetAutor(Pessoa $autor) {
    
    $this->autor = $autor;
  }  
  function GetAutor() {
    
   return $this->autor->GetNome();
 
  }
  function SetTotPaginas($totPaginas) {
    if (is_numeric ($totPaginas)) {
      $this->totPaginas = $totPaginas;
   }
  }
  function GetTotPaginas() {
   return $this->totPaginas;
  }
  function SetPagAtual($pagAtual) {
    if (is_numeric ($pagAtual)) {
      $this->pagAtual = $pagAtual;
   }
  }
  function GetPagAtual() {
   return $this->pagAtual;
  }
  function SetAberto($aberto) {
    if (is_bool ($aberto)) {
      $this->aberto = $aberto;
   }
  }
  function GetAberto() {
   return $this->aberto;
  }
  function SetLeitor($leitor) {
    if (is_string ($leitor)) {
      $this->leitor = $leitor;
   }
  }
  function GetLeitor() {
   return $this->leitor;
  }
  function voltarPagina() {
    $this->pagAtual = $this->pagAtual - 1;
 }
 function avancarPagina() {
  $this->pagAtual = $this->pagAtual + 1;
}
function folhear($folha) {
$this->SetPagAtual($folha);

}
function abrir() {
  if ($this->aberto == false) {
  $this->aberto = true; 
  return $this->aberto;
}
}
function fechar() {
  if ($this->aberto == true) {
  $this->aberto = false; 
  return $this->aberto;

  }
}

}
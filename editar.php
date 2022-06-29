<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Aluno');

use \App\Entity\Aluno;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A Aluno
$obAluno = Aluno::getAluno($_GET['id']);

//VALIDAÇÃO DA Aluno
if(!$obAluno instanceof Aluno){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['endereco'],$_POST['nota'])){

  $obAluno->nome    = $_POST['nome'];
  $obAluno->descricenderecoao = $_POST['endereco'];
  $obAluno->nota     = $_POST['nota'];
  $obAluno->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
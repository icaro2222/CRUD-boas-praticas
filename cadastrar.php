<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Aluno');

use \App\Entity\Aluno;
$obAluno = new Aluno;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['endereco'],$_POST['nota'])){

  $obAluno->nome    = $_POST['nome'];
  $obAluno->endereco = $_POST['endereco'];
  $obAluno->nota     = $_POST['nota'];
  $obAluno->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($alunos as $aluno){
    $resultados .= '<tr>
                      <td>'.$aluno->id.'</td>
                      <td>'.$aluno->nome.'</td>
                      <td>'.$aluno->endereco.'</td>
                      <td>'.$aluno->nota.'</td>
                      <td>
                        <a href="editar.php?id='.$aluno->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$aluno->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="4" class="text-center">
                                                              Nenhuma aluno encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Nova Aluno</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Nota</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>
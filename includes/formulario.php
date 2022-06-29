<main></main>
    <section>
      <a href="index.php">
        <button class="btn btn-success">Voltar</button>
      </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">

<div class="container-fluid">
<div class="row">
      <div class="col-md-7">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" value="<?=$obAluno->nome?>">
      </div>

    <div class="col-md-5">
      <label>Endereço</label>
      <textarea class="form-control" name="endereco"><?=$obAluno->endereco?></textarea>
    </div>

    <div class="col-md-2">
      <label>Nota</label>
      <textarea class="form-control" name="nota"><?=$obAluno->nota?></textarea>
    </div>

    <div class="col-md-7">
      <label>Anotação</label>
      <textarea class="form-control" name="nota"><?=$obAluno->nota?></textarea>
    </div>

    <div class="col-md-3">
      <label>Anotação</label>
      <textarea class="form-control" name="nota"><?=$obAluno->nota?></textarea>
    </div>

      <div class="col-md-1">
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
  </div>
</div>

    </form>

</main>
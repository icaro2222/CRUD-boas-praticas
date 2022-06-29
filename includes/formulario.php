<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?=TITLE?></h2>

  <form method="post">

    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" value="<?=$obAluno->nome?>">
    </div>

  <div class="form-group">
    <label>Endereço</label>
    <textarea class="form-control" name="endereco"><?=$obAluno->endereco?></textarea>
  </div>

  <div class="form-group">
    <label>Nota</label>
    <textarea class="form-control" name="nota"><?=$obAluno->nota?></textarea>
  </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

  </form>

</main>
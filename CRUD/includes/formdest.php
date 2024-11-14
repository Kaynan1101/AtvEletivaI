<main>
    <section>
        <a href="index-dest.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group">
            <label>NOME</label>
            <input type="text" class="form-control" name="nome" value="<?=$obDestino->nome?>">
        </div>

        <div class="form-group">
            <label>DESCRIÇÃO</label>
            <input type="text" class="form-control" name="descricao" value="<?=$obDestino->descricao?>">
        </div>

        <div class="form-group">
            <label>PAÍS</label>
            <input type="text" class="form-control" name="pais" value="<?=$obDestino->pais?>">
        </div>

        <div class="form-group">
            <label>CIDADE</label>
            <input type="text" class="form-control" name="cidade" value="<?=$obDestino->cidade?>">
        </div>

        <div class="form-group">
            <button type="submit" class="mt-4 btn btn-success">ENVIAR</button>
        </div>
    </form>

</main>
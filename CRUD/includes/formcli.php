<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastar Cliente</h2>

    <form method="post">
        <div class="form-group">
            <label>NOME</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <div class="form-group">
            <label>EMAIL</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label>TELEFONE</label>
            <input type="number" class="form-control" name="telefone">
        </div>

        <div class="form-group">
            <label>ENDEREÇO</label>
            <input type="text" class="form-control" name="endereco">
        </div>

        <div class="form-group">
            <button type="submit" class="mt-4 btn btn-success">ENVIAR</button>
        </div>
    </form>

</main>
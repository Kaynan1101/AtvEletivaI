<main>

    <h2 class="mt-3">EXCLUIR DESTINO</h2>

    <form method="post">
        <div class="form-group">
            <p>Deseja realmente excluir o destino <strong><?=$obDestino->nome?></strong>?</p>
        </div>

        <div class="form-group">
            <a href="index-dest.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>

            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>

</main>
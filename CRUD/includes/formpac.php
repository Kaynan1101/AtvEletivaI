<main>
    <section>
        <a href="index-pac.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group"> 
            <label>DESTINO</label>
            <select name="id_destino" class="form-control" required> 
                <?php foreach ($destinos as $destino) { 
                    echo "<option value='{$destino->id_destino}'>{$destino->nome}</option>";
                }
                ?> 
            </select>
        </div>

        <div class="form-group">
            <label>Data de Início</label>
            <input type="date" class="form-control" name="dt_inicio" value="<?=$obPacotes->dt_inicio?>">
        </div>

        <div class="form-group">
            <label>Data de Término</label>
            <input type="date" class="form-control" name="dt_fim" value="<?=$obPacotes->dt_fim?>">
        </div>

        <div class="form-group">
            <label>Valor</label>
            <input type="value" class="form-control" name="valor" value="<?=$obPacotes->valor?>">
        </div>

        <div class="form-group">
            <button type="submit" class="mt-4 btn btn-success">ENVIAR</button>
        </div>
    </form>

</main>
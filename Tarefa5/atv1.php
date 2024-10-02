<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarefa 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="resp1.php" method="POST">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <label for="nome<?php echo $i; ?>">Nome <?php echo $i; ?>:</label>
            <input type="text" name="nome[]" id="nome<?php echo $i; ?>"><br>
            <label for="telefone<?php echo $i; ?>">Telefone <?php echo $i; ?>:</label>
            <input type="text" name="telefone[]" id="telefone<?php echo $i; ?>"><br><br>
        <?php } ?>
        <input type="submit" value="Enviar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
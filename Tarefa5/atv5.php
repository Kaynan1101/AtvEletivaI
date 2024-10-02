<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tarefa 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <form action="resp5.php" method="POST">
    <?php for ($i = 1; $i <= 5; $i++) { ?>
      <label for="titulo<?php echo $i; ?>">Título do Livro <?php echo $i; ?>:</label>
      <input type="text" name="titulo[]" id="titulo<?php echo $i; ?>"><br>
      <label for="quantidade<?php echo $i; ?>">Quantidade em Estoque <?php echo $i; ?>:</label>
      <input type="number" name="quantidade[]" id="quantidade<?php echo $i; ?>"><br>
      <label for="preco<?php echo $i; ?>">Preço do Livro <?php echo $i; ?>:</label>
      <input type="number" step="0.01" name="preco[]" id="preco<?php echo $i; ?>"><br><br>
    <?php } ?>
    <input type="submit" value="Enviar">
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
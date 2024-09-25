<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarefa 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <form action="resp1.php" method="POST">
        <div class="form-group">
            <label for="num1">Número 1:</label>
            <input type="number" class="form-control" id="num1" name="numeros[]" required>
        </div>
        <div class="form-group">
            <label for="num2">Número 2:</label>
            <input type="number" class="form-control" id="num2" name="numeros[]" required>
        </div>
        <div class="form-group">
            <label for="num3">Número 3:</label>
            <input type="number" class="form-control" id="num3" name="numeros[]" required>
        </div>
        <div class="form-group">
            <label for="num4">Número 4:</label>
            <input type="number" class="form-control" id="num4" name="numeros[]" required>
        </div>
        <div class="form-group">
            <label for="num5">Número 5:</label>
            <input type="number" class="form-control" id="num5" name="numeros[]" required>
        </div>
        <div class="form-group">
            <label for="num6">Número 6:</label>
            <input type="number" class="form-control" id="num6" name="numeros[]" required>
        </div>
        <div class="form-group">
            <label for="num7">Número 7:</label>
            <input type="number" class="form-control" id="num7" name="numeros[]" required>
        </div>
        <button type="submit">Enviar</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
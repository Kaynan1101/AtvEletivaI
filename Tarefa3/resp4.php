<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tarefa 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1$num1'];

    if ($num1 > 100) {
      $desconto = $num1 * 0.15;
      $novoV = $num1 - $desconto;

      echo "<p>O valor original do produto era R$: " . $num1 . "</p>";
      echo "<p>Desconto aplicado de 15% R$: " . $desconto . "</p>";
      echo "<p>O novo valor do produto é R$: " . $novoV . "</p>";
    } else {
      echo "<p>O valor do produto é R$: " . $num1 . "</p>";
      echo "<p>Nenhum desconto foi aplicado, pois o valor não excede R$ 100,00.</p>";
    }
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
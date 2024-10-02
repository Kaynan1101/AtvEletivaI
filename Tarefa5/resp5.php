<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tarefa 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulos = $_POST['titulo'];
    $quantidades = $_POST['quantidade'];
    $precos = $_POST['preco'];

    $livros = array();
    for ($i = 0; $i < count($titulos); $i++) {
      $livros[] = array(
        'titulo' => $titulos[$i],
        'quantidade' => $quantidades[$i],
        'preco' => $precos[$i]
      );
    }

    echo "<h3>Livros com Baixa Quantidade:</h3>";
    foreach ($livros as $livro) {
      if ($livro['quantidade'] <= 5) {
        echo "Título: {$livro['titulo']}, Quantidade: {$livro['quantidade']}, Preço: R$ " . number_format($livro['preco'], 2, ',', '.') . "<br>";
      }
    }

    usort($livros, function ($a, $b) {
      return strcmp($a['titulo'], $b['titulo']);
    });

    echo "<h3>Lista de Livros Ordenada por Título:</h3>";
    foreach ($livros as $livro) {
      echo "Título: {$livro['titulo']}, Quantidade: {$livro['quantidade']}, Preço: R$ " . number_format($livro['preco'], 2, ',', '.') . "<br>";
    }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
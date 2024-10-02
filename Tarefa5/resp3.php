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
        $codigos = $_POST['codigo'];
        $nomes = $_POST['nome'];
        $precos = $_POST['preco'];
    
        $produtos = array();
        for ($i = 0; $i < count($codigos); $i++) {
            $produtos[] = array(
                'codigo' => $codigos[$i],
                'nome' => $nomes[$i],
                'preco' => $precos[$i]
            );
        }
        $produtos_filtrados = array_filter($produtos, function($produto) {
            return $produto['preco'] > 100;
        });

        usort($produtos_filtrados, function($a, $b) {
            return strcmp($a['nome'], $b['nome']);
        });
        
        echo "<h3>Lista de Produtos Filtrados:</h3>";
        foreach ($produtos_filtrados as $produto) {
            echo "Código: {$produto['codigo']}, Nome: {$produto['nome']}, Preço: {$produto['preco']}<br>";
        }
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
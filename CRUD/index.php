<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Cliente;

$clientes = Cliente::getClientes();
echo "<pre>"; print_r($clientes); echo "</pre>"; exit;




include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';


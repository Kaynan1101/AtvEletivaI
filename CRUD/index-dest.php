<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Destino;

$destinos = Destino::getDestinos();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-dest.php';
include __DIR__.'/includes/footer.php';


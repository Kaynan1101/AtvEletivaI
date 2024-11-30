<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Pacotes;

$pacotes = Pacotes::getPacotes();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-pac.php';
include __DIR__.'/includes/footer.php';


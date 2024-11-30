<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'CADASTRAR PACOTE');

use \App\Entity\Pacotes;
use \App\Entity\Destino;

$obPacotes = new Pacotes;
$destinos = Destino::getDestinos();

//validação do post
if (isset($_POST['dt_inicio'],$_POST['dt_fim'],$_POST['valor'],$_POST['id_destino'])){


    $obPacotes->dt_inicio = $_POST['dt_inicio'];
    $obPacotes->dt_fim = $_POST['dt_fim'];
    $obPacotes->valor = $_POST['valor'];
    $obPacotes->id_destino = $_POST['id_destino'];
    $obPacotes->cadastrar();

    header('location: index-pac.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formpac.php';
include __DIR__ . '/includes/footer.php';

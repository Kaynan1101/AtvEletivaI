<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE','EDITAR PACOTE');

use \App\Entity\Pacotes;

//validação de id
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index-pac.php?status=error');
    exit;
}

//CONSULTA VAGA
$obPacotes = Pacotes::getPacote($_GET['id']);

//validar vaga
if(!$obPacotes instanceof Pacotes) {
    header('location: index-pac.php?status=error');
    exit;
}

//validação do post
if(isset($_POST['dt_inicio'], $_POST['dt_fim'], $_POST['valor'], $_POST['id_destino'])){


    $obPacotes->dt_inicio = $_POST['dt_inicio'];
    $obPacotes->dt_fim = $_POST['dt_fim'];
    $obPacotes->valor = $_POST['valor'];
    $obPacotes->id_destino = $_POST['id_destino'];
    $obPacotes->Atualizar();

    header('location: index-pac.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formpac.php';
include __DIR__.'/includes/footer.php';


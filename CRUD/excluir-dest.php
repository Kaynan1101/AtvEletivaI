<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Destino;

//validação de id
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index-dest.php?status=error');
    exit;
}

//CONSULTA VAGA
$obDestino = Destino::getDestino($_GET['id']);

//validar vaga
if(!$obDestino instanceof Destino) {
    header('location: index-dest.php?status=error');
    exit;
}

//validação do post
if(isset($_POST['excluir'])){

    $obDestino->Excluir();

    header('location: index-dest.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/conf-exc-dest.php';
include __DIR__.'/includes/footer.php';


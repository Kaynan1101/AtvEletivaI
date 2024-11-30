<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Pacotes;

//validação de id
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index-pac.php?status=error');
    exit;
}

//CONSULTA VAGA
$obPacotes = Pacotes::getPacotes($_GET['id']);

//validar vaga
if(!$obPacotes instanceof Pacotes) {
    header('location: index-pac.php?status=error');
    exit;
}

//validação do post
if(isset($_POST['excluir'])){

    $obPacotes->Excluir();

    header('location: index-pac.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/conf-exc-pac.php';
include __DIR__.'/includes/footer.php';


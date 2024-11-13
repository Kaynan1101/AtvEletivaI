<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Cliente;

//validação de id
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

//CONSULTA VAGA
$obCliente = Cliente::getCliente($_GET['id']);

//validar vaga
if(!$obCliente instanceof Cliente) {
    header('location: index.php?status=error');
    exit;
}

//validação do post
if(isset($_POST['excluir'])){

    $obCliente->Excluir();

    header('location: index.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';


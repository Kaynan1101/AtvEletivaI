<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE','EDITAR DESTINO');

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
if(isset($_POST['nome'], $_POST['descricao'], $_POST['pais'], $_POST['cidade'])){


    $obDestino->nome = $_POST['nome'];
    $obDestino->descricao = $_POST['descricao'];
    $obDestino->pais = $_POST['pais'];
    $obDestino->cidade = $_POST['cidade'];
    $obDestino->Atualizar();

    header('location: index-dest.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formdest.php';
include __DIR__.'/includes/footer.php';


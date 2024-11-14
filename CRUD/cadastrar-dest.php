<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'CADASTRAR DESTINO');

use \App\Entity\Destino;
$obDestino = new Destino;

//validação do post
if (isset($_POST['nome'],$_POST['descricao'],$_POST['pais'],$_POST['cidade'])){


    $obDestino->nome = $_POST['nome'];
    $obDestino->descricao = $_POST['descricao'];
    $obDestino->pais = $_POST['pais'];
    $obDestino->cidade = $_POST['cidade'];
    $obDestino->cadastrar();

    header('location: index-dest.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formdest.php';
include __DIR__ . '/includes/footer.php';

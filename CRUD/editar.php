<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Cliente;

//validação de id
//if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    //header('location: index.php?status=error');
    //exit;
//}

//$obCliente = Cliente::getCliente($_GET['id']);
//echo "<pre>"; print_r($obCliente); echo "</pre>"; exit;

//validação do post
if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['endereco'])){
    $obCliente = new Cliente;
    $obCliente->nome = $_POST['nome'];
    $obCliente->email = $_POST['email'];
    $obCliente->telefone = $_POST['telefone'];
    $obCliente->endereco = $_POST['endereco'];
    $obCliente->cadastrar();

    header('location: index.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formcli.php';
include __DIR__.'/includes/footer.php';


<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'CADASTRAR VAGA');

use \App\Entity\Cliente;
$obCliente = new Cliente;

//validação do post
if (isset($_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['endereco'])){


    $obCliente->nome = $_POST['nome'];
    $obCliente->email = $_POST['email'];
    $obCliente->telefone = $_POST['telefone'];
    $obCliente->endereco = $_POST['endereco'];
    $obCliente->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formcli.php';
include __DIR__ . '/includes/footer.php';

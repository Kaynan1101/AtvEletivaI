<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Cliente;

//validação do post
if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['endereco'])){
    $obCliente = new Cliente;
    $obCliente->nome = $_POST['nome'];
    $obCliente->email = $_POST['email'];
    $obCliente->telefone = $_POST['telefone'];
    $obCliente->endereco = $_POST['endereco'];
    $obCliente->cadastrar();
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formcli.php';
include __DIR__.'/includes/footer.php';


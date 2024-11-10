<?php

namespace App\Entity;

use \App\Db\Database;

class Cliente{

    /**
     * @var interger
     */
    public $id;

    /**
     * @var string
     */
    public $nome;

    /**
     * @var string
     */
    public $telefone;

    /**
     * @var string
     */
    public $endereco;

    /**
     * @var string
     */
    public $email;

    /**
     * @return boolean
     */
    public function cadastrar(){
        //inserir cliente no banco
        $obDatabase = new Database('cliente');
        echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;




        //atribuir id da vaga


        //retornar sucesso

    }

}
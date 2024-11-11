<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Cliente{

    /**
     * @var integer
     */
    public $id_cliente;

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
        $obDatabase = new Database('clientes');
        $this->id_cliente = $obDatabase->insert([
                                                    'nome' => $this->nome,
                                                    'email' => $this->email,
                                                    'telefone' => $this->telefone,
                                                    'endereco' => $this->endereco
                                                ]);


        //retornar sucesso
        return true;

    }

    /**
     * @param string
     * @param string
     * @param string
     * @return array
     */
    public static function getClientes($where = null, $order = null, $limit = null){
        return (new Database('clientes'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * @param integer
     * @return Cliente
     */
    public static function getCliente($id_cliente){
        return (new Database('clientes'))->select('id_cliente = ' .$id_cliente)
                                            ->fetchObject(self::class);
    }

}
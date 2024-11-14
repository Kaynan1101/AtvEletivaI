<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Destino{

    /**
     * @var integer
     */
    public $id_destino;

    /**
     * @var string
     */
    public $nome;

    /**
     * @var string
     */
    public $descricao;

    /**
     * @var string
     */
    public $pais;

    /**
     * @var string
     */
    public $cidade;

    /**
     * @return boolean
     */
    public function cadastrar(){
        //inserir cliente no banco
        $obDatabase = new Database('destinos');
        $this->id_destino = $obDatabase->insert([
                                                    'nome' => $this->nome,
                                                    'descricao' => $this->descricao,
                                                    'pais' => $this->pais,
                                                    'cidade' => $this->cidade
                                                ]);


        //retornar sucesso
        return true;

    }


    /**
     * @return boolean
     */
    public function Atualizar(){
        return (new Database('destinos'))->update('id_destino = '.$this->id_destino, [
                                                                                        'nome' => $this->nome,
                                                                                        'descricao' => $this->descricao,
                                                                                        'pais' => $this->pais,
                                                                                        'cidade' => $this->cidade
                                                                                    ]);

    }


    /**
     * @return boolean
     */
    public function Excluir(){
        return (new Database('destinos'))->delete('id_destino = '.$this->id_destino);
    }

    /**
     * @param string
     * @param string
     * @param string
     * @return array
     */
    public static function getDestinos($where = null, $order = null, $limit = null){
        return (new Database('destinos'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * @param integer
     * @return Destino
     */
    public static function getDestino($id_destino){
        return (new Database('destinos'))->select('id_destino = ' .$id_destino)
                                            ->fetchObject(self::class);
    }



}
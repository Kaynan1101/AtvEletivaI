<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Pacotes{

    /**
     * @var integer
     */
    public $id_pacote;

    /**
     * @var date
     */
    public $dt_inicio;

    /**
     * @var date
     */
    public $dt_fim;

    /**
     * @var decimal
     */
    public $valor;

    /**
     * @var integer
     */
    public $id_destino;

    /**
     * @return boolean
     */
    public function cadastrar(){
        //inserir pacote no banco
        $obDatabase = new Database('pacotes');
        $this->id_pacote = $obDatabase->insert([
                                                    'dt_inicio' => $this->dt_inicio,
                                                    'dt_fim' => $this->dt_fim,
                                                    'valor' => $this->valor,
                                                    'id_destino' => $this->id_destino 
                                                ]);


        //retornar sucesso
        return true;

    }


    /**
     * @return boolean
     */
    public function Atualizar(){
        return (new Database('pacotes'))->update('id_pacote = '.$this->id_pacote, [
                                                                                        'dt_inicio' => $this->dt_inicio,
                                                                                        'dt_fim' => $this->dt_fim,
                                                                                        'valor' => $this->valor,
                                                                                        'id_destino' => $this->id_destino 
                                                                                    ]);

    }


    /**
     * @return boolean
     */
    public function Excluir(){
        return (new Database('pacotes'))->delete('id_pacote = '.$this->id_pacote);
    }

    /**
     * @param string
     * @param string
     * @param string
     * @return array
     */
    public static function getPacotes($where = null, $order = null, $limit = null){
        return (new Database('pacotes'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * @param integer
     * @return Pacotes
     */
    public static function getPacote($id_pacote){
        return (new Database('pacotes'))->select('id_pacote = ' .$id_pacote)
                                            ->fetchObject(self::class);
    }



}
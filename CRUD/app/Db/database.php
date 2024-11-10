<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{
    /**
     * @var string
     */
    const HOST = 'localhost';

    /**
     * @var string
     */
    const NAME = 'crud_cpv';

    /**
     * @var string
     */
    const USER = 'root';

       /**
     * @var string
     */
    const PASS = '';


    /**
     * @var string
     */
    private $table;

    /**
     * @var PDO
     */
    private $connection;

    /**
     * @param string
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }

    }

}
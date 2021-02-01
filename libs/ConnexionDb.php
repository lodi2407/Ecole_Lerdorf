<?php

namespace App\libs;

use PDO;
use PDOException;

class ConnexionDb extends PDO
{
    private const DBHOST = "";
    private const DBNAME = "";
    private const DBUSER = "";
    private const DBPASS = '';

    private static $instance;

    private function __construct(){

        $dsn = 'mysql:dbname=' . self::DBNAME . ';host=' . self::DBHOST;

        try{
            parent::__construct($dsn, self::DBUSER, self::DBPASS);

            //ici $this correspond à PDO
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public static function getInstance():self {
        
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}
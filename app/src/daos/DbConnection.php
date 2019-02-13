<?php

namespace Cart\Daos;

use \PDO as PDO;

class DbConnection
{
    private $host = "";
    private $dbName = "";
    private $user = "";
    private $password = "";
    
    public function __construct()
    {
        $config = parse_ini_file( __DIR__.'/../../config.ini');
        $this->host = $config['host'];
        $this->dbName = $config['dbName'];
        $this->user = $config['user'];
        $this->password = $config['password'];
    }

    /**
     * PDO Connection
     * 
     * 
     * @return PDO Una conexion con mysql
     */

    public function getConnection()
    {
        try {
            $conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName,
                $this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Exception $e) {
            echo 'Database error:' . $e->getMessage();
        }
    }

}

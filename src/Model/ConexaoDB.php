<?php 

namespace Sistema\Model;

use PDO;
use PDOException;

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'projetorede');

class ConexaoDB {

    protected $conectar;

    public function conectar()
    {
        try {
            $this->conectar = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
            $this->conectar->exec("SET CHARACTER SET utf8"); 
            
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
            die;
        }
        return $this->conectar;
    }
}

?>
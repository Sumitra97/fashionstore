<?php

namespace LIB\Core;

class Database {
    /**
     * @var
     */
 

    /**
     * PDO Resource Object
     *
     * @var \PDO
     */
    protected $_db;

    /**
     * Database constructor.
     */
    public function __construct(){
        $this->_db = new \PDO('mysql:host=' . _DATABASE_HOST . ';dbname=' . _DATABASE_NAME, _DATABASE_USER, _DATABASE_PASSWORD);
        
    }
}

?>






<?php

class ArticleCrud {


    private $host = 'localhost';
    private $dbname = 'CRUDtest';
    private $uname = 'root';
    private $password = '4045487';


    /**
     * @return PDO
     */
    public function getConnection()
    {
        $connect = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->uname, $this->password);

        return $connect;
    }










}
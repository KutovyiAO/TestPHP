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


    /**
     * @return PDOStatement
     */
    public function create()
    {
        $CreateConnection=$this->getConnection();
        $createSQL=$CreateConnection->prepare('INSERT INTO article (name,description,created_at)
                              VALUES (:name,:description,:created_at)' );

            $createSQL->bindValue(':name', $_POST['name']);
            $createSQL->bindValue(':description', $_POST['description']);
            $createSQL->bindValue(':created_at', $_POST['created_at']);

        $createSQL->execute();

        return $createSQL;
    }


    /**
     *
     */
    public function selectForEdit()
    {
        $CreateConnection=$this->getConnection();
        $selectSQL=$CreateConnection->prepare('SELECT * FROM article  WHERE id=:id');
        $selectSQL->bindValue(':id', $_GET['id']);
        $selectSQL->execute();

        $result = $selectSQL->fetchALL();
        foreach ($result as $element) {};

        require_once '../View/editForm.php';

    }


    /**
     *
     */
    public function update()
    {
        $CreateConnection=$this->getConnection();
        $updateSQL=$CreateConnection->prepare('UPDATE article SET name=:name,
 description = :description,
  created_at = :created_at
   WHERE id=:id');
        $updateSQL->bindValue(':id', $_GET['id']);
        $updateSQL->bindValue(':name', $_POST['name']);
        $updateSQL->bindValue(':description', $_POST['description']);
        $updateSQL->bindValue(':created_at', $_POST['created_at']);

        $updateSQL->execute();
    }


    /**
     *
     */
    public function delete()
    {
        $CreateConnection=$this->getConnection();
        $deleteSQL=$CreateConnection->prepare('DELETE FROM article WHERE id=:id');

        $deleteSQL->bindValue(':id', $_GET['id']);
        $deleteSQL->execute();


    }



}
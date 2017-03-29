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
     * @param $name
     * @param $description
     * @param $created_at
     * @return PDOStatement
     */
    public function create($name, $description, $created_at)
    {
        $CreateConnection = $this->getConnection();
        $createSQL = $CreateConnection->prepare('INSERT INTO article (name,description,created_at)
                              VALUES (:name,:description,:created_at)' );

            $createSQL->bindValue(':name', $name);
            $createSQL->bindValue(':description', $description);
            $createSQL->bindValue(':created_at', $created_at);

        $createSQL->execute();

        return $createSQL;
    }


    /**
     * @param $id
     * @return array
     */
    public function selectForEdit($id)
    {
        $CreateConnection=$this->getConnection();
        $selectSQL=$CreateConnection->prepare('SELECT * FROM article  WHERE id=:id');
             $selectSQL->bindValue(':id', $id);
             $selectSQL->execute();

        $result = $selectSQL->fetchALL();
        return $result;

        foreach ($result as $element) {};

        require_once '../View/editForm.php';

    }


    /**
     * @param $id
     * @param $name
     * @param $description
     * @param $created_at
     * @return bool
     */
    public function update($id, $name, $description, $created_at)
    {
        $CreateConnection=$this->getConnection();
        $updateSQL=$CreateConnection->prepare('UPDATE article SET name=:name,
                                                 description = :description,
                                                  created_at = :created_at
                                                   WHERE id=:id');
            $updateSQL->bindValue(':id', $id);
            $updateSQL->bindValue(':name', $name);
            $updateSQL->bindValue(':description', $description);
            $updateSQL->bindValue(':created_at', $created_at);

        $result = $updateSQL->execute();

        return $result;
    }


    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $CreateConnection=$this->getConnection();
        $deleteSQL=$CreateConnection->prepare('DELETE FROM article WHERE id=:id');

        $deleteSQL->bindValue(':id', $id);
        $result = $deleteSQL->execute();

        return $result;
    }

}
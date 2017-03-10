<?php

require 'connect.php';



function createData ()
{

    $data = array();
        $data[0]= $_POST['id'] ;
        $data[1]= $_POST['name'];
        $data[2]= $_POST['description'];
        $data[3]= $_POST['created_at'];

return $data;
}

if (!empty($_POST["name"]) && !empty($_POST["description"]) && !empty($_POST["created_at"]))
{

    echo "Заполните поля!";

} else {

    $createSQL= $connect->prepare('INSERT INTO CRUDtest. (id, name, description, created_at) VALUES (:id,:name,:description,:created_at)' );

    $createSQL->execute($data);
   
}



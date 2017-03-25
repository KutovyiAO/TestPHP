<?php

require_once('connect.php');


if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {



    $createSQL=$connect->prepare('INSERT INTO article (name,description,created_at)
                              VALUES (:name,:description,:created_at)' );
    $createSQL->execute(array(


        ':name'=>$_POST['name'],
        ':description'=>$_POST['description'],
        ':created_at'=>$_POST['created_at']
    ));


    header('location:index.php');
}





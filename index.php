<?php

 require_once ('connect.php');


             $selectSQL=$connect->prepare('SELECT * FROM article ');
             $selectSQL->execute();

            $data=$selectSQL->fetchAll();

    foreach ($data as $row) {
    echo $row['name']. '-'. $row['description'].'-'.$row['created_at'].' 
        <a href="edit.php?id='.$row['id'] .'">edit</a>
        <a href="Create.php?id='.$row['id'] .'">Create</a>
        <a href="delete.php?id='.$row['id'] .'">Delete</a><br>';


    }











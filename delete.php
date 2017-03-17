<?php

require_once ('connect.php');


if (isset($_GET['id']))
{

    $deleteSQL=$connect->prepare('DELETE FROM article WHERE id=:id');
    $deleteSQL->execute();


   header('location:index.php');
}







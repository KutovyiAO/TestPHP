<?php

require_once ('connect.php');


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

?>

<form method="POST" >

    <br>
    <input placeholder="name" name="name" type="text" >
    <br>
    <input  placeholder="description" name="description" type="text">
    <br>
    <input  placeholder="created_at" name="created_at" type="DATETIME">
    <br>

    <!-- buttons-->

    <input type="submit" name="create" value="create"  ><br>


</form>



<?php

require_once ('connect.php');

?>
<?php

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
<form method="POST" action="" >

    <br>
    <input placeholder="name" name="name" type="text" value="<?php echo $name ?>">
    <br>
    <input  placeholder="description" name="description" type="text" value="<?php echo $description ?>">
    <br>
    <input  placeholder="created_at" name="created_at" type="DATETIME" value="<?php echo $created_at ?>" >
    <br>

    <!-- buttons-->

    <input type="submit" name="create" value="create"  ><br>


</form>



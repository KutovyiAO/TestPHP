<?php

require_once 'connect.php';

function getPosts(){

    $posts = array();
    $posts[0]= $_POST['id'];
    $posts[1]= $_POST['name'];
    $posts[2]= $_POST['description'];
    $posts[3]= $_POST['created_at'];

    return $posts;
}

if (isset($_POST['delete']))
{
    $data= getPosts();
    $deleteSQL=$connect->prepare('DELETE FROM article WHERE id = :id' );
    $deleteSQL->execute(array(
        'id'=>$data[0]));
    }



?>
<form method="POST" action="" >

    <input placeholder="id" name="id" type="number" value="<?php echo  $id ?>"" >
    <br>
    <input placeholder="name" name="name" type="text" value="<?php echo $name ?>">
    <br>
    <input  placeholder="description" name="description" type="text" value="<?php echo $description ?>">
    <br>
    <input  placeholder="created_at" name="created_at" type="DATETIME" value="<?php echo $created_at ?>" >
    <br>

    <!-- buttons-->

    <input type="submit" name="create" value="create"  ><br>

    <input type="submit" name="delete" value="delete"  ><br>

    <input type="submit" name="select" value="Select"   ><br>

</form>

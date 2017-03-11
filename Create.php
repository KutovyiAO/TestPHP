<?php

require_once ('connect.php');

?>
<?php

function getPosts(){

    $posts = array();
    $posts[0]= $_POST['id'];
    $posts[1]= $_POST['name'];
    $posts[2]= $_POST['description'];
    $posts[3]= $_POST['created_at'];

    return $posts;
}

if (isset($_POST['create']))
{
    $data = getPosts();

    if(empty($data[1]) && empty($data[2]) && empty($data[3])){
        echo 'Введите данные';
    } else (

    $createSQL=$connect->prepare('INSERT INTO article (name,description,created_at)
                              VALUES (:name,:description,:created_at)' ));
    $createSQL->execute(array(
        ':name'=>$data[1],
        ':description'=>$data[2],
        ':created_at'=>$data[3],
    ));


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



<?php

require_once 'connect.php';


$selectSQL=$connect->prepare('SELECT * FROM article  WHERE id=:id');
$selectSQL->execute();

$result = $selectSQL->fetchAll();
foreach ($result as $row);


if (isset($_POST['delete']))
{

    $deleteSQL=$connect->prepare('DELETE FROM article WHERE id = :id' );
    $deleteSQL->execute();

    header('location:index.php');
}



?>


<form method="POST">

    <br>
    <input placeholder="name" name="name" type="text" value="<?php echo  $row['name']; ?>">
    <br>
    <input  placeholder="description" name="description" type="text" value="<?php echo $row[':description']; ?>">
    <br>
    <input  placeholder="created_at" name="created_at" type="DATETIME" value="<?php echo $row[':created_at']; ?>" >
    <br>

    <!-- buttons-->

    <input type="submit" name="delete" value="delete"  ><br>


</form>




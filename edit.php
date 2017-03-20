<?php

require_once ('connect.php');


if (isset($_GET['id']))
$selectSQL=$connect->prepare('SELECT * FROM article  WHERE id=:id');
$selectSQL->bindValue(':id', $_GET['id']);
$selectSQL->execute();

$result = $selectSQL->fetchALL();
foreach ($result as $element) {};
//echo $element['name']. '-'. $element['description'].'-'.$element['created_at'];



if (!empty($_POST['update'])){



    $updateSQL=$connect->prepare('UPDATE article SET name=:name,
 description = :description,
  created_at = :created_at
   WHERE id=:id');
    $updateSQL->bindValue(':id', $_GET['id']);
    $updateSQL->bindValue(':name', $_POST['name']);
    $updateSQL->bindValue(':description', $_POST['description']);
    $updateSQL->bindValue(':created_at', $_POST['created_at']);

    $updateSQL->execute();


    header('location:index.php');
}


?>

<form method="POST">

    <br>
    <input placeholder="name" name="name" type="text" value="<?php echo  $element['name']; ?>">
    <br>
    <input  placeholder="description" name="description" type="text" value="<?php echo $element['description']; ?>">
    <br>
    <input  placeholder="created_at" name="created_at" type="DATETIME" value="<?php echo $element['created_at']; ?>" >
    <br>

    <!-- buttons-->

    <input type="submit" name="update" value="update"  ><br>


</form>



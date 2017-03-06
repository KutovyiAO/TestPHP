<?php

 require('connect.php');


?>

<form method="post" action="index.php" >

<input placeholder="id" name="id" type="number" value="<?php echo $id ?>"" >
    <br>
<input placeholder="name" name="name" type="text" value="<?php echo $name ?>">
<br>
<input  placeholder="description" name="description" type="text" value="<?php echo $description ?>">
<br>
<input  placeholder="created_at" name="created_at" type="text" value="<?php echo $created_at ?>" >
<br>
<input type="submit" name="Cоздать" value="<?php require_once 'Create.php'?>" >
<input type="submit" name="Удалить" value="<?php require_once 'delete.php'?>" >

</form>








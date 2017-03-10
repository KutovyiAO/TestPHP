<?php

 require('connect.php');
echo "DB conected";

?>

<form method="POST" action="Create.php" >

<input placeholder="id" name="id" type="number" value="<?php  $id ?>"" >
    <br>
<input placeholder="name" name="name" type="text" value="<?php  $name ?>">
<br>
<input  placeholder="description" name="description" type="text" value="<?php  $description ?>">
<br>
<input  placeholder="created_at" name="created_at" type="DATETIME" value="<?php  $created_at ?>" >
<br>

   <!-- buttons-->
<input type="submit" name="Create" value="Cоздать"  ><br>
<input type="submit" name="delete" value="Удалить"  ><br>
<input type="submit" name="Select" value="Select"   >
</form>








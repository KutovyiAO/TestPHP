
<form method="POST" action="../Controller/edit.php" >

    <br>
    <input placeholder="name" name="name" type="text" value="<?php echo  $editSQL['name']; ?>">
    <br>
    <input  placeholder="description" name="description" type="text" value="<?php echo $editSQL['description']; ?>">
    <br>
    <input  placeholder="created_at" name="created_at" type="DATETIME" value="<?php echo $editSQL['created_at']; ?>" >
    <br>

    <!-- buttons-->

    <input type="submit" name="update" value="update"  ><br>


</form>

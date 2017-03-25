
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
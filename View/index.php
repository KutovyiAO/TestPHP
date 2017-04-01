<?php

foreach ($data as $row) {
echo $row['name']. '-'. $row['description'].'-'.$row['created_at'].'
<a href="edit.php?id='.$row['id'] .'">Edit</a>
<a href="create.php?id='.$row['id'] .'">Create</a>
<a href="delete.php?id='.$row['id'] .'">Delete</a><br>';

}

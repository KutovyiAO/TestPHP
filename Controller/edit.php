<?php

require_once '../Model/model.php';


if (isset($_GET['id'])){

    $select = new ArticleCrud();
    $select=$select->selectForEdit();

}

require_once '../View/editForm.php';



if (!empty($_POST['update'])){

$update = new ArticleCrud();
$update = $update->update();



    header('location:../Controller/index.php');
}

require_once '../Controller/index.php';



<?php

    require_once '../Model/model.php';

if (isset($_GET['id'])){

    $select = new ArticleCrud();
    $select = $select->selectForEdit($_GET['id']);
}

    require_once '../View/editForm.php';

if (!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['created_at']) ){

$update = new ArticleCrud();
$update = $update->update($_GET['id'], $_POST['name'], $_POST['description'], $_POST['created_at']);

    header('location:../Controller/index.php');
}

    require_once '../Controller/index.php';



<?php


require_once '../Model/ArticleCrud.php';
require_once '../View/createForm.php';

if (isset($_POST['name']) && isset($_POST['description'])) {

    $name        = $_POST['name'];
    $description = $_POST['description'];
    $created_at  = date('Y-m-d H:i:s', time());

    $createSQL = new ArticleCrud();
    $data=$createSQL->create($name, $description, $created_at);

    header('location:../Controller/index.php');
}





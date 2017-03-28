<?php


require_once '../Model/model.php';

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $created_at = $_POST['created_at'];



    $createSQL = new ArticleCrud();
    $data=$createSQL->create($name,$description,$created_at);

    header('location:../View/index.php');
}

require_once '../View/createForm.php';



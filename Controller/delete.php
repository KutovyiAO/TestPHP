<?php

    require_once '../Model/model.php';

if (isset($_GET['id']))
{

$delete = new ArticleCrud();
$delete = $delete ->delete($_GET['id']);

    header('location:../Controller/index.php');
}







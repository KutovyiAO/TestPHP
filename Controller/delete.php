<?php

require_once '../Model/model.php';

if (isset($_GET['id']))
{

$delete = new ArticleCrud();
$delete = $delete ->delete();

    header('location:../View/index.php');
}







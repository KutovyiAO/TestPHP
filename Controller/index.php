<?php

    require_once('../Model/ArticleCrud.php');

$model     = new ArticleCrud();
$connect   = $model->getConnection();
$selectSQL = $connect->prepare('SELECT * FROM article ');
$selectSQL->execute();

$data=$selectSQL->fetchAll();

    require_once '../View/index.php';










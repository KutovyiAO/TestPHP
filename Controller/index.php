<?php

    require_once'../Model/ArticleCrud.php';

$model     = new ArticleCrud();
$post_All = $model->post();

    require_once '../View/index.php';












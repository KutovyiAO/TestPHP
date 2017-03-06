<?php

require 'connect.php';

$deleteSQL=$connect->prepare('DELETE FROM Anton. WHERE id=:id);
:id->$data[0];

$deleteSQL->execute();

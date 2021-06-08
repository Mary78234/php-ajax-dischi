<?php

//richiama database
include 'data/db.php';

/* json che conperte database php in js */

header('Content-Type: application/json');
echo json_encode($database);

?>
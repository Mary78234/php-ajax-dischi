<?php

//richiama database
require_once __DIR__ . '/data/db.php';

//inizializzo array generi
$genres = [];
//se genre inviato da index-bue.html è vuoto o contiene 'all', se una delle due condizione vere allora $albums si inserisce $database, altrimenti $albums sarà vuto
$albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $database : [];

//riempio array genery
foreach($database as $album){
  //se il genere non c'è già nell'array $genres, allora lo inserisco
  if(!in_array($album['genre'], $genres)){
    $genres[] = $album['genre'];
  }
}

//riempio array albums nel caso $_GET['genre'] sia diverso da vuoto o 'all', cioè è vuoto
if(count($albums) === 0){
  foreach($database as $album){
    if($album['genre'] === $_GET['genre']){
      $albums[] = $album;
    }
  }
}


$response = [
  'albums' => $albums,
  'genres' => $genres
];


/* json che conperte database php in js */
header('Content-Type: application/json');
echo json_encode($response);

?>
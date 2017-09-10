<?php

$req = $_SERVER['REQUEST_METHOD'];

if($req=='GET'){

  // Connect mongodb without password.
    //$m = new MongoClient();
  // Connect mongodb with username and password (authentication mode)
    $m = new MongoClient("mongodb://localhost", array("username" => "your-username", "password" => "your-password"));

  if($m){
    $db = $m->test_db;
    $collection = $db->test_collection;
    echo "mongodb connecting OK";
  }else {
    echo "mongodb connecting failed";
    exit();
  }

  // Read documen in collection.
  $cursor = $collection->find();
  echo nl2br("\n");

  foreach ($cursor as $doc) {
    var_dump($doc);
  }

}else {

}

?>

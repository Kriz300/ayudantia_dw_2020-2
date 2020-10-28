<?php
    try {
        require '../vendor/autoload.php';
        $client = new MongoDB\Client('Los datos del server. En su caso "mongodb://localhost:27017"');
    } catch (\Throwable $th) {
        alert("Cago BD :'c");
    }
?>

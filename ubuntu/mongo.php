<?php
    try {
        require '../vendor/autoload.php';
        $client = new MongoDB\Client('Los datos para su server.');
    } catch (\Throwable $th) {
        alert("Cago BD :'c");
    }
?>
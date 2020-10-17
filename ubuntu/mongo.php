<?php
    try {
        require '../vendor/autoload.php';
        $client = new MongoDB\Client('mongodb+srv://ayudante:SCBUn7rfNG8kse0U@cluster0.iuadt.mongodb.net/ayudantia?retryWrites=true&w=majority');
    } catch (\Throwable $th) {
        alert("Cago BD :'c");
    }
?>
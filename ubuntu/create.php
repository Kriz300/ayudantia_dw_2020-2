<?php
    session_start();
    include_once("mongo.php");
        
    try 
    {
        $user = $client->Ayudantia->Users;
        $user->insertOne([
            "name" => $_POST["name"],
            "pass" => $_POST["password"],
            "mail" => $_POST["mail"],
            "wallet" => 0
        ]);
        header("Location: /ubuntu/login.php");
        
    } catch (\Throwable $t) {
        header("Location: /ubuntu/register.php?TryAgain");
        echo $t;
    }
?>
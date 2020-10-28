<?php
    session_start();
    include_once("mongo.php");
        
    try
    {
        $user = $client->Ayudantia->Users;
        $user->updateOne(
            array("mail" => $_SESSION["mail"]),
            ['$set' => array("wallet" => $_SESSION["wallet"] + 1 /*$_GET["saldo"]*/)]
        );
        $_SESSION["wallet"] =  $_SESSION["wallet"] + 1;
        header("Location: /ubuntu/");
    } catch (\Throwable $t) {
        header("Location: /ubuntu/index.php?TryAgain");
        echo $t;
    }
?>
<?php
    session_start();
    include_once("mongo.php");
        
    try 
    {
        $user = $client->Ayudantia->Users->findOne(['mail' => $_POST["mail"]]);
        if ($user["pass"]==$_POST["password"])
        {
            $_SESSION["usuario"]=$user["name"];
            $_SESSION["mail"]=$_POST["mail"];
            $_SESSION["wallet"]=$user["wallet"];
            $_SESSION["id"]=$user['_id']->__toString();
            header("Location: /ubuntu/index.php");
        }
        else
        {
            header("Location: /ubuntu/login.php?TryAgain");
        }
    } catch (\Throwable $t) {
        header("Location: /ubuntu/login.php?TryAgain");
        echo $t;
    }
?>
<?php
try {
    $db = new PDO("mysql:dbname=chitchatapp;host:localhost", "root", "root");            
        }catch (PDOexception $e){
            echo "FAIL";
}

?>
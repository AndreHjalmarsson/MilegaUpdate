<?php
session_start();
//Connecting to the database
try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=milega;charset=utf8",
    "root",
    "root");
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
 ?>

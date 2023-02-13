<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poc_share_wheels";

try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       // set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch(PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
     }



     $name = "";
     $email = "";
     $password1 = "";
     $password2 = "";



     $name = $_POST["username"];
     $email = $_POST["email"];
     $password1 = $_POST["password1"];
     $password2 = $_POST["password2"];



     $password1 = rand(1000,5000);






?>
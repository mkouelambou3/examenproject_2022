<?php
$server = "localhost";
$dbname = "poc_share_wheels";
$username = "root";
$password = "";

$conn = new mysqli($server, $dbname, $username, $password);

if($conn) {
       die("Connection failed:" . mysqli_connect_error());
}
echo "Connected Successfully";


if(empty($_POST["submit"])) {
       $id = $_POST["id"];
       $name = $_POST["name"];
       $lastname = $_POST["lastname"];
       $email= $_POST["email"];
       $message = $_POST["message"];
       $sql = ("INSERT INTO contacten (naam, achternaam, email, bericht) VALUES ('" . $name. "', '" . $lastname. "','" . $email. "','" . $message. "')");

       if(!empty($id)) {
              $message = "Bedankt dat u met ons contact heeft opgenomen. We reageren so spoedig mogelijk terug op uw bericht.";
       }
}


?>
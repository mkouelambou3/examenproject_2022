<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "poc_share_wheels";

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_error) {
        die("Connection Failed" .$conn->connect_error);
  }

  $name = $_POST["user_name"];
?>
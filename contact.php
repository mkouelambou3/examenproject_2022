<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "poc_share_wheels";

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


  $name = $_POST["user_name"];
  $email = $_POST["user_email"];
  $select = $_POST["select"];
  $content = $_POST["content"];
  $message = $_POST["message"];

  $sql = "INSERT INTO contacts(user_name, user_email, select, content, message) VALUES (:ph_username, :ph_useremail, :ph_select, :ph_content, :ph_message)";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":ph_username", $name); 
  $stmt->bindParam(":ph_useremail", $email); 
  $stmt->bindParam(":ph_select", $select);
  $stmt->bindParam(":ph_content", $content);
  $stmt->bindParam(":ph_message", $message);
  $stmt->execute();
  // $stmt->errorInfo();
?>
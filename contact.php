<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POC Share Wheels - Contact Form</title>
  <link rel="stylesheet" href="contact-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d6dc7c8001.js" crossorigin="anonymous"></script>
</head>
<nav>
  <a href="home.html" class="logo">
    <i class="fa-solid fa-car-side"></i> POC Share Wheels
  </a>
</nav>
<div class="container-2">
  <form class="form-2">
    <h1>Confirmation Contact Form</h1>
    <p>Bedankt dat u met ons contact heeft genomen, we reageren zo
      snel mogelijk op uw bericht.</p>
    <div>
      <a href="home.html" class="hero_btn-confirm" style="
                margin-left: 35%;
                ">Back To Home</a>
    </div>
  </form>
</div>

</html>



<?php

include "./mail.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poc_share_wheels";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


$name = "";
$email = "";
$select = "";
$content = "";
$message = "";


$name = $_POST["user_name"];
$email = $_POST["user_email"];
$select = $_POST["select"];
$content = $_POST["content"];
$message = $_POST["message"];

$sql = "INSERT INTO contacts(user_name, user_email, `select`, content, `message`) VALUES (:ph_username,:ph_useremail,:ph_select,:ph_content,:ph_message)";


$stmt = $conn->prepare($sql);
$stmt->bindParam(":ph_username", $name);
$stmt->bindParam(":ph_useremail", $email);
$stmt->bindParam(":ph_select", $select);
$stmt->bindParam(":ph_content", $content);
$stmt->bindParam(":ph_message", $message);
$stmt->execute();
$stmt->errorInfo();

echo sendEmail(
  $email,
  'POC Share Wheels Response Contact Form',
  'Beste Bezoeker,
   Bedankt u contact heeft opgenomen met POC Share Wheels. Wij zullen zo snel mogelijk 
   proberen om uw terug te bereiken.
   Check meer op onze site voor onze contacttijden.'
);


//TODO: Include mail.php in this file.
//TODO: Create function to send email.
//TODO: Call function with email from post data.

?>
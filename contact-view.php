<?php
if (! empty($_POST["send"])) {
       $name = $_POST['userName'];
       $email = $_POST['userEmail'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];


       $conn = mysqli_connect("localhost", "root", "test", "contacts") or die("Connection Error:" . mysqli_error($conn));
       $stmt = $conn->prepare("INSERT INTO contacts (user_name, user_email, subject,content) VALUES (?, ?, ?, ?)");
       $stmt->bind_param("ssss", $name, $email, $subject, $content);
       $stmt->execute();
       $message = "Je contact is veilig opgeslagen.";
       $type = "success";
       $stmt->close();
       $conn->close();
}
require_once "contacts.php";
?>
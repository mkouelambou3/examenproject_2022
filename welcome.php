<?php
       session_start();
       include 'config.php';
       $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

       if (mysqli_num_rows($query) > 0) {
             $row = mysqli_fetch_assoc($query);

             echo "Welcome "  . $row['naam'];
       }
?>
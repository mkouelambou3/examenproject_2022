<?php
       include 'config.php';
       session_start();

       if (!isset($_SESSION['SESSION_EMAIL'])) {
            header("Location: home.html");
            die();
        }

       $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

       if (mysqli_num_rows($query) > 0) {
             $row = mysqli_fetch_assoc($query);

             echo "Welcome "  . $row['naam']  . " <a href= 'logout.php'>Logout</a>";
       }
?>
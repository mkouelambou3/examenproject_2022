<?php

include 'config.php';
session_start();

if (!isset($_SESSION['SESSION_EMAIL'])) {
       header("Location: home.php");
       die();
}

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
       $row = mysqli_fetch_assoc($query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
       <title>POC Share Wheels - Profile Page</title>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="profile.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script src="https://kit.fontawesome.com/d6dc7c8001.js" crossorigin="anonymous"></script>
</head>

<body>

       <div class="container">

              <div class="profile">
                     <nav>
                            <a href="home.html" class="logo">
                                   <i class="fa-solid fa-car-side"></i>POC Share Wheels
                            </a>
                            <p style="margin-bottom: 15px; font-size: 13px; font-weight: 700;">
                                   Het updaten van uw acccount, het kan elke dag bij POC Share Wheels.</p>
                     </nav>
                     <?php
                     $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                     if (mysqli_num_rows($query) > 0) {
                            $row = mysqli_fetch_assoc($query);
                     }

                     if ($row['filename'] == '') {
                            echo '<img src = "images/user-4.png">';
                     } else {
                            echo '<img src="images/' . $row['filename'] . '">';
                     }

                     ?>
                     <h3> <?php echo "Welcome, "  . $row['naam']; ?> </h3>
                     <a href="update_profile.php" class="btn"> Update Profiel </a>
                     <a href="logout.php" class="delete-btn">Uitloggen</a>
                     <a href="welcome.php" class="back-btn">Ga Terug</a>

              </div>

       </div>

</body>

</html>
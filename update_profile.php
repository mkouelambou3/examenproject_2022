<?php

include 'config.php';
$msg = "";
session_start();

$email = $_SESSION['SESSION_EMAIL'];

if (isset($_POST['update_profile'])) {
    $update_naam = mysqli_real_escape_string($conn, $_POST['update_naam']);
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

    $query = mysqli_query($conn, "UPDATE `users` SET name = '{$update_naam}', email = '{$update_email}' WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    $old_password = $_POST['old_password'];
    $update_password = mysqli_escape_string($conn, md5($_POST['update_password']));
    $new_password = mysqli_escape_string($conn, md5($_POST['new_password']));
    $new_confirm_password = mysqli_escape_string($conn, md5($_POST['new_confirm_password']));

    if (!empty($update_password) || !empty($new_password) || !empty($new_confirm_password)) {
        if ($update_password != $old_password) {
            $msg = "<div class='alert alert-danger' style='font-weight: bold; color:#c80000; font-size:10px; margin-left:45px; ';>ERROR, Oud wachtword is niet gelijk.</div>";
        } elseif ($new_password != $new_confirm_password) {
            $msg = "<div class='alert alert-danger' style='font-weight: bold; color:#c80000; font-size:10px; margin-left:45px; ';> Nieuw wachtwoord / Herhaal nieuw wachtwoord is niet gelijk.</div>";
        } else {
           $query = mysqli_query($conn, "UPDATE `users` SET password = '{$new_confirm_password}' WHERE email='{$_SESSION['SESSION_EMAIL']}'");
           $msg = "<div class='alert alert-info' style='font-weight: bold; color:green; font-size:12px; margin-left:40px; ';> Gelukt, Uw profiel is succesvol geupdatet.</div>";
        }
    }
}

    $update_filename = $_FILES['update_choosefile']['name'];
    $update_tempname = $_FILES["update_choosefile"]["tmp_name"];
    $update_folder = "image/" .$update_filename;

    if (!empty($update_filename)) {
        if ($update_filename > 2000000) {
            $msg = "<div class='alert alert-danger' style='font-weight: bold; color:#c80000; font-size:10px; margin-left:45px; ';>ERROR, Uw bestand is te groot.</div>";
        } else {
            $filename_update_query = mysqli_query($conn, "UPDATE `users` SET filename = '{$update_filename}' WHERE email='{$_SESSION['SESSION_EMAIL']}'");
            if($filename_update_query) {
                move_uploaded_file($update_tempname, $update_folder);
            }
            $msg = "<div class='alert alert-info' style='font-weight: bold; color:green; font-size:12px; margin-left:40px; ';> Gelukt, Uw bestand is geupdatet.</div>";
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
       <title>POC Share Wheels - Sign up Form</title>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" 
       integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" 
       crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script src="https://kit.fontawesome.com/d6dc7c8001.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="update_profile.css">
     
       
       

</head>
<body>

        <?php
             $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
             if(mysqli_num_rows($query) > 0){
             $row = mysqli_fetch_assoc($query);
             }

              if ($row['filename'] == ''){
                     echo '<img src = "images/user4.jpg">';
              } else {
                     echo '<img src="images/'.$row['filename'].'">';
              }
              
        ?>



       <div class="limiter">
       <div class="container-profile100">
       <div class="wrap-profile100">
       <div class="profile100-pic js-tilt" data-tilt="">
       <img src="images/update_profile.png" alt="IMG">
       </div>
       
       
       <form class="profile100-form validate-form" action="" method="post" enctype="multipart/form-data">
       <nav>
            <a href="home.html" class="logo">
                   <i class="fa-solid fa-car-side"></i>POC Share Wheels
            </a>
            <p>Update Je account vandaag nog bij POC Share Wheels. </p>
        </nav>
              <span class="profile100-form-title">Member Update Profile</span>
              <span class="profile100-form-error"> * Verplichte velden</span>
       <div class="wrap-input100 validate-input alert-validate" data-validate="Update naam is verplicht.">
       <input class="input100" type="text" id="naam" name="update_naam" placeholder="Naam" pattern="[A-Za-z]{0-9}">
       <span class="focus-input100"></span>
       <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
       </span>
       </div>

       <div class="wrap-input100 validate-input alert-validate" data-validate="Update email is verplicht: 123@gmail.com">
              <input class="input100" type="text" id="email" name="update_email" placeholder="Email">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
       </span>
       </div>

       
       <div class="wrap-input100 validate-input alert-validate" data-validate="Oud wachtwoord is verplicht.">
              <input class="input100" type="hidden" name="old_password" placeholder="Oud wachtwoord" minlength="6">

              <input class="input100" type="password" name="update_password" placeholder="Oud wachtwoord" minlength="6">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                     <i class="fa-solid fa-key" aria-hidden="true"></i>
       </span>
       </div>
       

       <div class="wrap-input100 validate-input alert-validate" data-validate="Update nieuw wachtwoord is verplicht.">
              <input class="input100" type="password" name="new_password" placeholder=" Nieuw wachtwoord" minlength="6">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                     <i class="fa-solid fa-lock" aria-hidden="true"></i>
       </span>
       </div>

       <div class="wrap-input100 validate-input alert-validate" data-validate="Update herhalen nieuw wachtwoord is verplicht.">
              <input class="input100" type="password" id="confirm_password" name="new_confirm_password" placeholder="Herhaal nieuw Wachtwoord" minlength="6" oninput="check(this)">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                     <i class="fa fa-unlock" aria-hidden="true"></i>
                     
       </span>
       </div>

       <div class="flex">
       <div class="update-profile">
              <div class="inputBox">
              <span class="update-text">Update uw foto  :</span>
              <input type="file" name="update_choosefile" accept="image/jpg, image/jpeg, image/png" class="box">
              </div>
       </div>
       </div>

       <?php echo $msg; ?>

       <div class="container-profile100-form-btn">
       <button class="profile100-form-btn" value="update_profile" name="update_profile">Update Profiel</button>
       </div>

       <div class="text-center p-t-136">
       <a class="txt3" href="profile.php">
       Ga Terug.
       <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
       </a>
       </div>
       <script>
              (function($) {
       "use strict";
       var input = $('.validate-input .input100');
       $('.validate-form').on('submit', function() {
           var check = true;
           for (var i = 0; i < input.length; i++) {
               if (validate(input[i]) == false) {
                   showValidate(input[i]);
                   check = false;
               }
           }
           return check;
       });
       $('.validate-form .input100').each(function() {
           $(this).focus(function() {
               hideValidate(this);
           });
       });
       function validate(input) {
           if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
               if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                   return false;
               }
           } else {
               if ($(input).val().trim() == '') {
                   return false;
               }
           }
       }
       function showValidate(input) {
           var thisAlert = $(input).parent();
           $(thisAlert).addClass('alert-validate');
       }
       function hideValidate(input) {
           var thisAlert = $(input).parent();
           $(thisAlert).removeClass('alert-validate');
       }
   }
   )(jQuery);
       </script>
       </form>
       </div>
       
       </div>
       </div>
</body>
</html>
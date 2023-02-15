

<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    require_once (__DIR__ . '/vendor/autoload.php');
  

    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {
        $naam = mysqli_real_escape_string($conn, $_POST['naam']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm_password']));
        $code = mysqli_real_escape_string($conn, md5(rand()));

        
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
            $msg = "<div class='alert alert-danger'style='font-weight:bold; color:#58a3db; font-size:11px; margin-left:45px;' ;>{$email} - Email adres bestaat al.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO users (naam, email, password, code) VALUES ('{$naam}', '{$email}', '{$password}', '{$code}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
            
                $msg = "<div class='alert alert-info' style='font-weight: bold; color:green; font-size:13px; margin-left:20px; ';> Verificatie link naar uw email gestuurd.</div>";
                } else {
                    $msg = "<div class='alert alert-danger' style='font-weight: bold; color:#c80000; font-size:13px; margin-left:20px; ';> Iets ging fout, probeer het opnieuw.</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger' style='font-weight: bold; color:#c80000; font-size:10px; margin-left:40px; ';>Wachtwoord / Herhaal Wachtwoord niet gelijk</div>";
            }
        }
        sendEmail($email, 'POC Share Wheels Comfirmation Sign Up',
        'Beste Gebruiker,
         Bedankt dat u uw account heeft geregistreerd bij ons. Hier is de link van de verificatiecode:
         <a href="http://localhost/examenproject_2022/?verification='.$code.'">http://localhost/examenproject_2022/?verification='.$code.'</a></b>');
   }

  
?>




<!DOCTYPE html>
<html lang="en">
<head>
       <title>POC Share Wheels - Sign up Form</title>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="signup.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" 
       integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" 
       crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script src="https://kit.fontawesome.com/d6dc7c8001.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="signup.css">
     
       
       

</head>
<body>
    
    
       <div class="limiter">
       <div class="container-signup100">
       <div class="wrap-signup100">
       <div class="signup100-pic js-tilt" data-tilt="">
       <img src="images/signup-image.png" alt="IMG">
       </div>
       
       <form class="signup100-form validate-form" action="" method="post">
        <nav>
            <a href="home.html" class="logo">
                   <i class="fa-solid fa-car-side"></i>POC Share Wheels
            </a>
            <p>Creëer Je Account vandaag nog aan bij POC Share Wheels. </p>
        </nav>
              <span class="signup100-form-title">Member Sign Up</span>
              <span class="signup100-form-error"> * Verplichte velden</span>
       <div class="wrap-input100 validate-input alert-validate" data-validate="Naam is verplicht.">
       <input class="input100" type="text" id="naam" name="naam" placeholder="Naam" pattern="[A-Za-z]{0-9}">
       <span class="focus-input100"></span>
       <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
       </span>
       </div>
       <div class="wrap-input100 validate-input alert-validate" data-validate="Email is verplicht: 123@gmail.com">
              <input class="input100" type="text" id="email" name="email" placeholder="Email">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
       </span>
       </div>
       <div class="wrap-input100 validate-input alert-validate" data-validate="Wachtwoord is verplicht.">
              <input class="input100" type="password" name="password" placeholder="Wachtwoord" minlength="6">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                     <i class="fa fa-lock" aria-hidden="true"></i>
       </span>
       </div>
       <div class="wrap-input100 validate-input alert-validate" data-validate="Herhalen wachtwoord is verplicht.">
              <input class="input100" type="password" id="confirm_password" name="confirm_password" placeholder="Herhaal Wachtwoord" minlength="6" oninput="check(this)">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                     <i class="fa fa-unlock" aria-hidden="true"></i>
                     
       </span>
       </div>
       <?php echo $msg; ?>
       <div class="container-signup100-form-btn">
       <button class="signup100-form-btn" id="submit" name="submit">Sign Up</button>
       </div>
       <div class="text-center p-t-12">
<span class="txt1">
Forgot
</span>
<a class="txt2" href="forgot-password.php">
Username / Password?
</a>
</div>
       <div class="text-center p-t-136">
       <a class="txt3" href="login.php">
       Al lid? Log In.
       <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
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
</body>
</html>
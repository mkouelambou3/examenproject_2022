<?php


require_once (__DIR__ . '/vendor/autoload.php');

include 'config.php';
$msg = "";


if (isset($_POST['submit'])) {
    $email = mysqli_escape_string($conn, $_POST['email']);
    $code = mysqli_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE users SET code='{$code}' WHERE email='{$email}'");

        if ($query) {
            $msg = "<div class='alert alert-success' style='font-weight: bold; color:green; font-size:13px; margin-left:20px; ';> Verificatie link naar uw email gestuurd.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger' style='font-weight: bold; color:#c80000; font-size:12px; margin-left:45px; ';>$email - Dit e-mail adres is niet gevonden.</div>";
    }

    
    sendEmail($email, 'POC Share Wheels - Reset Account Password',
        'Beste Gebruiker, <br>
         Bedankt dat u ons uw email heeft opgestuurd. <br>
         Hier is de link van uw verificatiecode:  <br>
         <a href="http://localhost:8012/examenproject_2022/change-password.php?reset='.$code.'">http://localhost:8012/examenproject_2022/change-password.php?reset='.$code.'</a></b>');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
       <title>POC Share Wheels - Login In Form</title>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="signup.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" 
       integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" 
       crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script src="https://kit.fontawesome.com/d6dc7c8001.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="forgot-password.css">
</head>
<body>
    
    
    <div class="limiter">
    <div class="container-signup100">
    <div class="wrap-signup100">
    <div class="signup100-pic js-tilt" data-tilt="">
    <img src="images/signin-image.png" alt="IMG">
    </div>
    <form class="signup100-form validate-form" action="" method="post">  
        <nav>
         <a href="home.html" class="logo">
                <i class="fa-solid fa-car-side"></i>POC Share Wheels
         </a>
         <p>Wachtwoord vergeten? Stel gerust je Wachtwoord opnieuw in. </p>
     </nav>
           <span class="signup100-form-title">Member Forgot Password</span>
           <span class="signup100-form-error"> * Verplichte velden</span>
            <div class="wrap-input100 validate-input alert-validate" data-validate="Email is verplicht: 123@gmail.com">
           <input class="input100" type="text" id="email" name="email" placeholder="Email">
           <span class="focus-input100"></span>
           <span class="symbol-input100">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
    </span>
    </div>
    <?php echo $msg; ?>
    <div class="container-signup100-form-btn">
    <button class="signup100-form-btn" id="submit" name="submit">Send Link</button>
    </div>
    <div class="text-center p-t-136">
    <a class="txt4" href="login.php">
    Terug naar Login.
    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
    </a>

            <a class="txt5" href="home.php">
            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
            Terug naar Home.
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
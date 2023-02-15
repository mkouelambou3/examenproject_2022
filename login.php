

<?php
    include 'config.php';
    $msg = "";
    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}' ");

            if ($query) {
                $msg = "<div class= 'alert alert-success' style='font-weight: bold; color:green; font-size:13px; margin-left:65px; ';>Account verificatie is gelukt.</div>";
            }
        } else {
            header("Location: login.php");
        }
    }

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));

        $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            if (empty($row['code'])) {
                
            } else {
                $msg = "<div class='alert alert-info' style='font-weight: bold; color:#58a3db; font-size:13px; margin-left:20px; ';>Verifieer uw account eerst en probeer het opnieuw.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger' style='font-weight: bold; color:#c80000; font-size:10px; margin-left:40px; ';>Email of wachtwoord zijn niet gelijk.</div>";
        }
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
       <link rel="stylesheet" href="login.css">
</head>
<body>
    
    
    <div class="limiter">
    <div class="container-signup100">
    <div class="wrap-signup100">
    <div class="signup100-pic js-tilt" data-tilt="">
    <img src="images/signup-image_1.jpg" alt="IMG">
    </div>
    <form class="signup100-form validate-form" action="" method="post">  
        <nav>
         <a href="home.html" class="logo">
                <i class="fa-solid fa-car-side"></i>POC Share Wheels
         </a>
         <p>Log in met je account bij POC Share Wheels. </p>
     </nav>
           <span class="signup100-form-title">Member Login</span>
           <span class="signup100-form-error"> * Verplichte velden</span>
    <div class="wrap-input100 validate-input alert-validate" data-validate="Email is verplicht: 123@gmail.com">
           <input class="input100" type="text" id="email" name="email" placeholder="Email">
           <span class="focus-input100"></span>
           <span class="symbol-input100">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
    </span>
    </div>
    <div class="wrap-input100 validate-input alert-validate" data-validate="Wachtwoord is verplicht.">
           <input class="input100" type="password" id="password" name="password" placeholder="Wachtwoord" minlength="6">
           <span class="focus-input100"></span>
           <span class="symbol-input100">
                  <i class="fa fa-lock" aria-hidden="true"></i>
    </span>
    </div>
    <?php echo $msg; ?>
    <div class="container-signup100-form-btn">
    <button class="signup100-form-btn" id="submit" name="submit">Log In</button>
    </div>
    <div class="text-center p-t-12">
     <span class="txt1">
     Forgot
     </span>
     <a class="txt2" href="forgot-password.php">
     Password?
     </a>
     </div>
    <div class="text-center p-t-136">
    <a class="txt3" href="register.php">
    Nog geen lid? Registreer nu.
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
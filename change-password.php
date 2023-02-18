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
       <link rel="stylesheet" href="change-password.css">
     
       
       

</head>
<body>
    
    
       <div class="limiter">
       <div class="container-signup100">
       <div class="wrap-signup100">
       <div class="signup100-pic js-tilt" data-tilt="">
       <img src="images/signup-image.jpg" alt="IMG">
       </div>
       
       <form class="signup100-form validate-form" action="" method="post">
        <nav>
            <a href="home.html" class="logo">
                   <i class="fa-solid fa-car-side"></i>POC Share Wheels
            </a>
            <p>Reset je wachtwoord nog vandaag in bij POC Share Wheels.</p>
        </nav>
              <span class="signup100-form-title">Member Sign Up</span>
              <span class="signup100-form-error"> * Verplichte velden</span>
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
       <?//php// echo $msg; ?>
       <div class="container-signup100-form-btn">
       <button class="signup100-form-btn" id="submit" name="submit">Change Password</button>
       </div>
<div class="text-center p-t-136">
<a class="txt4" href="login.php">
Terug naar Login.
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
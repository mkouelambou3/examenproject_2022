
<?php

      include 'config.php';
      $heading = "";
      $msg = "";

        $main_category = mysqli_escape_string($conn, $_GET["main_category"]);
        $token_id = mysqli_escape_string($conn, $_GET["token-id"]);

        $query = "SELECT `category`, `token-id` FROM `cars` WHERE `main_category` = '{$main_category}' AND `token-id` = '{$token_id}'";
        $result = mysqli_query($conn, $query);

        $query = $conn->query("SELECT `category`, `token-id` FROM `cars` WHERE `main_category` = '{$main_category}' AND `token-id` = '{$token_id}'");

        $result = $query->fetch_object()->category;
        if(mysqli_num_rows($query) > 0) {
          $heading = "Waar en wanneer wil je de {$result} ($token_id) halen?";
        }

        if (isset($_POST["order-product-btn"])) {
          $main_category = mysqli_escape_string($conn, $_GET["main_category"]);
          $token_id = mysqli_escape_string($conn, $_GET["token-id"]);
          $city = mysqli_escape_string($conn, $_POST["city"]);
          $surname = mysqli_escape_string($conn, $_POST["surname"]);
          $name = mysqli_escape_string($conn, $_POST["name"]);
          $email = mysqli_escape_string($conn, $_POST["email"]);
          $check_in = mysqli_escape_string($conn, $_POST["check_in"]);
          $check_out = mysqli_escape_string($conn, $_POST["check_out"]);

          $sql =  "SELECT `main_category`, `category` `city`, `start_time`, `end_time`, `check_in`, `check_out` FROM cars WHERE `main_category` = '{$main_category}' ";
          $result_query = mysqli_query($conn, $sql); 

          if (mysqli_num_rows($result_query($conn, "SELECT * FROM orders WHERE email='{$email}' AND  `token-id` ='{$token_id}'")) > 0) {
            $msg = "<div class='info alert-danger'style='font-weight: bold; color: #58a3db; font-size: 13px; margin-left: 20%;' ;>Let op, deze auto is al besteld op deze email : {$email}.</div>";
          }

          if ($check_in > $check_out) {
            $msg = "<div class= 'info alert-danger' style='font-weight: bold; color:#c80000; font-size: 13px; margin-left: 20%; margin-right: 15%; margin-bottom: 15px; ';> ERROR, check-in datum mag niet later zijn dan de check-uit datum.</div>";
          } else {
            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM cars WHERE main_category='{$main_category}' AND city='{$city}'")) > 0) {
              $sql = "INSERT INTO orders (`token-id`, `city`, `surname`, `name`, `email`, `check_in`, `check_out`) VALUES ('{$token_id}', '{$city}', '{$surname}','{$name}','{$email}', '{$check_in}', '{$check_out}')";
              $result_query = mysqli_query($conn, $sql);

            if ($result_query) {
                header("Location: order-success.php");
            } else {
                $msg = "<div class= 'info alert-danger' style='font-weight: bold; color:#c80000; font-size: 13px; margin-left: 30%; margin-right: 30%; margin-bottom: 15px; ';> ERROR, uw bestelling kon niet voltooid worden.</div>";
              }
            } else {
              $msg = "<div class= 'info alert-danger' style='font-weight: bold; color:#c80000; font-size: 13px; margin-left: 27%; margin-right: 15%; margin-bottom: 15px; ';> ERROR, er zijn helaas geen resultaten teruggevonden.</div>";
            }
          }

          sendEmail($email, 'POC Share Wheels - Confirmation Order',
          'Beste Gebruiker, <br>
          Bedankt voor uw bestelling voor bij POC Share Wheels. <br>
          Hier is de info van uw bestelling: <br>
          main_category : '.$main_category.'<br>
          category : '.$result.' <br>
          token-id : '.$token_id.' <br>
          city : '.$city.' <br>
          surname : '.$surname.' <br>
          name : '.$name.' <br>
          email : '.$email.' <br>
          check_in : '.$check_in.' <br>
          check_out : '.$check_out.' <br>',
        );

          
        }


?>












<!DOCTYPE html>
<html lang="en">


<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>POC Share Wheels - Products Page</title>
       <link rel="stylesheet" href="book-finder.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
              crossorigin="anonymous"></script>
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap"
              rel="stylesheet">
       <script src="https://kit.fontawesome.com/d6dc7c8001.js" crossorigin="anonymous"></script>
       <script src="autocomplete.js"></script>
</head>

<body>


<div id="booking" class="section">
  <div class="content-blocks">
    <div>
      <div class="site-content-wrap">
        <div class="section-center">
          <div class="container" style="max-width: 760px;">
           
            <div class="row">
              <div class="booking-form">
               <!-- <section class="car-finder card car-finder_loaded">
                  <form action="" method="post" enctype="multipart/form-data">
                  <<fieldset>
                      <div class="main-categories_toggle">
                        <legend class="visually-hidden">Voertuigtype</legend>
                        <div class="main-categories_toggle-btn" onclick="carFunction()">
                          <input type="radio" id="car" name="main_category" class="visually-hidden" value="car" required="">
                          <label for="car" class="image-lazyloaded">
                          <img width="176" height="72" src="car-products/car-type-car.png" class="lazy-img loaded" alt="Auto" loading="lazy">
                          <span>Auto</span>
                        </label>
                        </div>
        
                        <div class="main-categories_toggle-btn" onclick="vanFunction()">
                          <input type="radio" id="van" name="main_category" class="visually-hidden" value="van" required="">
                          <label for="van" class="image-lazyloaded" name="van">
                          <img width="184" height="76" src="car-products/car-type-van.png" class="lazy-img loaded" alt="bestelauto" loading="lazy">
                          <span>Bestelauto</span>
                        </label>
                        </div>
        
                        <div class="main-categories_toggle-btn" onclick="luxeFunction()">
                          <input type="radio" id="luxe-car" name="main_category" class="visually-hidden" value="luxe-car" required="">
                          <label for="luxe-car" class="image-lazyloaded">
                          <img width="150" height="85" src="car-products/porsche_taycan.png " class="lazy-img loaded" alt="luxe-car" loading="lazy">
                          <span>Luxe Auto</span>
                        </label>
                        </div>
        
                      </div>
                    </fieldset> 
                    
                </section> !-->
                 <div class="car-finder_content">
                   <div class="car-finder_title">
                     <p class="car-finder_heading">
                       Huur een
                       <span id="category-type-text">Auto</span>
                     </p>
                     <span class="heading-3 car-finder_preffered-category" id="selected-car-text"> <?php echo $heading; ?> </span>
                   </div>
                 </div>
                 <form action="" method="post">
                  <div class="col-md-8">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Kies een stad, postcode of plaats" id="city" name="city" required=""
                      />
                      <span class="form-label">Waar wil je ophalen?</span>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Voer uw naam in" id="surname" name="surname" required=""
                      />
                      <span class="form-label">Voornaam</span>
                    </div>
                  </div>
                  
                  <!--<div class="col-md-2">
                    <div class="form-group">
                      <select class="form-control" id="start-time" name="start_time">
                        <option>9:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                      </select>
                      <span class="select-arrow"></span>
                      <span class="form-label">Ophaaltijd</span>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <select class="form-control" id="end-time" name="end_time">
                        <option>9:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                      </select>
                      <span class="select-arrow"></span>
                      <span class="form-label">Inlevertijd</span>
                    </div>
                  </div> !-->
                  <div class="col-md-8">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Voer uw achternaam in" id="name" name="name" required=""
                      />
                      <span class="form-label">Achternaam</span>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Voer uw email in" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required=""
                      />
                      <span class="form-label">Email</span>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <input class="form-control" type="date" id="check-in" name="check_in" required="" min="2023-04-07">
                      <span class="form-label">Check In</span>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <input class="form-control" type="date" required="" id="check-out" name="check_out" max="2023-05-01">
                      <span class="form-label">Check Uit</span>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-btn">
                      <button type="submit" class="submit-btn" id="submit-btn" name="order-product-btn">Book NU</button>
                    </div>
                  </div>
                  <?php echo $msg; ?>
                </form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
      </div>
    </div>

                
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  

<!-- Footer Section End -->

<script>
  function autocomplete(inp, arr) {
   
    var currentFocus;
    
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        
        this.parentNode.appendChild(a);
        
        for (i = 0; i < arr.length; i++) {
          
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            
            b = document.createElement("DIV");
            
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
           
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          
          currentFocus++;
          
          addActive(x);
        } else if (e.keyCode == 38) { //up
       
          currentFocus--;
          
          addActive(x);
        } else if (e.keyCode == 13) {
          
          e.preventDefault();
          if (currentFocus > -1) {
            
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      
      if (!x) return false;
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }
  
  
  var cities = ["Amsterdam-Noord", "Amsterdam-West", "Amsterdam-Oost", "Amsterdam Zuid (RAI) ", "Amsterdam Schiphol Airport", 
                "Utrecht", "Den Haag", "Amstelveen", "Rotterdam", "Leiden"];
  
  
  autocomplete(document.getElementById("city"), cities);
  </script>

    <script src="script.js"></script>
        <script>    
        let globalCategory = "<?php echo $main_category; ?>";
         $(document).ready(function() {
            document.getElementById("<?php echo $main_category; ?>").click();
            document.getElementById("selected-car-text").style.display = "block";
         });

       </script>
</body>
</html>
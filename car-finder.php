
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
    

?>












<!DOCTYPE html>
<html lang="en">


<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>POC Share Wheels - Products Page</title>
       <link rel="stylesheet" href="car-finder.css">
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
          <div class="container" style="max-width: 1160px;">
           
            <div class="row">
              <div class="booking-form">
                <section class="car-finder card car-finder_loaded">
                  <form action="" method="post" enctype="multipart/form-data">
                  <fieldset>
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
                    
                </section>
                 <div class="car-finder_content">
                   <div class="car-finder_title">
                     <p class="car-finder_heading">
                       Huur een
                       <span id="category-type-text">Auto</span>
                     </p>
                     <span class="heading-3 car-finder_preffered-category" id="selected-car-text"> <?php echo $heading; ?> </span>
                   </div>
                 </div>
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
                  <div class="col-md-2">
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
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" type="date" id="check-in" name="check_in" required="" min="2023-04-07">
                      <span class="form-label">Check In</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" type="date" required="" id="check-out" name="check_out" max="2023-05-01">
                      <span class="form-label">Check Uit</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-btn">
                      <button type="submit" class="submit-btn" id="submit-btn" name="car-product-btn" onclick="findCarButton()">Bekijk Auto's</button>
                    </div>
                  </div>
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
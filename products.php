<!DOCTYPE html>
<html lang="en">


<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>POC Share Wheels - Products Page</title>
       <link rel="stylesheet" href="products.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
              crossorigin="anonymous"></script>
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap"
              rel="stylesheet">
       <script src="https://kit.fontawesome.com/d6dc7c8001.js" crossorigin="anonymous"></script>
</head>
<style>
       h1 {
              font-size: 46px;
              font-weight: 800;
              margin: 15px 0;
              line-height: 50px;
              text-transform: uppercase;
              color: #24f8c7;
       }
</style>

<body>
<section class="sub-header">
              <nav>
                     <a href="home.html" class="logo">
                            <i class="fa-solid fa-car-side"></i> POC Share Wheels
                     </a>
                     <div class="nav-links" id="navLinks">
                            <!-- Reposnive bar open and close -->
                            <i class="fa fa-times" onclick="hideMenu()"></i>
                            <ul>
                                   <li><a href="home.html">Home</a></li>
                                   <li><a href="about.html">Over Ons</a></li>
                                   <li><a href="products.php">Producten</a></li>
                                   <li><a href="#">Reserveren</a></li>
                                   <li><a href="login.php">Login</a></li>
                                   <li><a href="contact.html">Contact</a></li>
                            </ul>
                     </div>
                     <i class="fa fa-bars" onclick="showMenu()"></i>
                     <!-- Reposnive bar open and close -->
              </nav>
              <h1>Onze Producten</h1>
</section>

<main role="main">
  <header class="page-header">
    <div class="site-content-wrap site-content-wrap_small">
       <h2 class="heading-1">Huren bij POC Share Wheels</h2>
         <div class="intro-text">
            <div class="markdown">
              <p>
                     Huur met de beste voorwaarden en een scherpe prijs. Of je nou 1
                     dag, een weekend, een lang weekend een personenauto of bestelauto
                     nodig hebt, bij POC Share Wheels vind je altijd de juiste huurauto die bij jou 
                     past!
              </p>
            </div>
         </div>
    </div>
          <div class="content-blocks">
             <div>
               <div class="site-content-wrap">
                  <section class="car-finder card car-finder_loaded">
                     <form>
                        <fieldset>
                            <div class="main-categories_toggle">
                               <legend class="visually-hidden">Voertuigtype</legend>
                              <div class="main-categories_toggle-btn">
                                <input type="radio" id="car" name="car-category" class="visually-hidden" value="car">
                                <label for="car" class="image-loaded">
                                   <img width="150" height="84" class="lazy-img loaded" alt="auto" 
                                   src="car-products/renault_captur_auto.png">
                                   <span>Auto</span>
                                </label>
                              </div>
                              <div class="main-categories_toggle-btn">
                                 <input type="radio" id="van" name="main-category" class="visually-hidden" value="van">
                                 <label for="van" class="image-loaded">
                                   <img width="150" height="76" class="lazy-img loaded" alt="bestelauto"
                                   src="car-products/opel_combo_bestelwagen.png">
                                   <span>Bestelauto</span>
                                 </label>
                              </div>
                              <div class="main-categories_toggle-btn">
                                <input type="radio" id="lux-car" name="main-category" class="visually-hidden" value="luxary-car">
                                <label for="lux-car" class="lazy-img loaded">
                                   <img width="150" height="84" class="lazy-img loaded" alt="luxary-car"
                                   src="car-products/porsche_taycan.png">
                                   <span>Luxe Auto</span>
                                </label>
                              </div>
                            </div>
                        </fieldset>
                        <div class="car-finder_content">
                           <div class="car-finder_title">
                            <p class="car-finder_heading"> 
                            Huur een 
                            <span>auto</span>
                            </p>
                           </div>
                           <div class="car-finder_column">
                             <p class="car-finder_subheading">Waar wil je ophalen?
                             </p>
                              <div class="branch-input">
                                <button type="button" class="btn-form-input">
                                   <svg class="icon-loaction">
                                     <use></use>
                                   </svg>
                                     <span class="btn-form-input_placeholder">Kies een stad, 
                                   postcode of plaats</span>
                                   </svg>
                                </button>
                            <div class="branch-input_modal">
                              <div class="btn-form-input">
                                <svg class="icon-loaction">
                                   <use></use>
                                </svg>
                              </div>
                              <input type="text" class="branch-input_search btn-form-input" id="waar-huren" autocomplete="off"
                              data-form-type="address,zip,query">
                              <button type="button" aria-label="Popup sluiten"
                              class="branch-input_btn-close">
                                <svg class="icon-close">
                                   <use></use>
                                </svg>
                              </button>
                            </div>
                              </div>
                        </div>
                     <div class="car-finder_column car-finder_calendar">
                       <p class="car-finder_subheading">Wanneer wil je huren?
                       </p>
                       <button type="button" class="btn-form-input" data-dashlane-label="true" data-form-type="action,search">
                          <svg class="icon-calendar">
                            <use>
                              </use>
                          </svg>
                           <span class="btn-form-input_placeholder">Kies data en
                            tijden
                           </span>
                       </button>
                     </div>
                     <div class="car-finder_column">
                       <button type="submit" class="btn-primary btn-large btn-block" data-dashlane-label="true" data-form-type="action,search">
                         Bekijk
                         <span>auto's</span>
                       </button>
                         </div>
                       </div>
                     </div>
                     </form>
                  </section>
               </div>
             </div>
             <!--<div></div>
             <div></div>
             <div></div>
             <div></div>
             <div></div>
             <div></div>
             !-->
          </div>
  </header>   
</main>














       <script src="script.js"></script>
</body>
</html>


       
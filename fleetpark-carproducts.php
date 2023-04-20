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
       }  
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POC Share Wheels - Fleetpark Car Products</title>
    <link rel="stylesheet" href="fleekpark-products.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC++EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/d6dc7c8001.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <style>
    .heading-products-text {
           font-size: 46px;
           font-weight: 800;
           margin: 15px 0;
           line-height: 50px;
           text-transform: uppercase;
           color: #24f8c7;
    }

    a {
           text-decoration: none;
           color: inherit;
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
            <li><a href="welcome.php">Home</a></li>
            <li><a href="about.php">Over Ons</a></li>
            <li><a href="product-page.php">Producten</a></li>
            <li><a href="#">Reserveren</a></li>
                <div class="dropdown">
                  <li><a href="#">Account</a></li>
                    <div class="dropdown-content">
                      <div class="user-info">
                      <?php echo "Welcome, "  . $row['naam'] ; ?>
                    </div>
                  <a href="profile.php">Profiel</a>
                <a href="logout.php">Uitloggen</a>
              </div>
            </div>
          <li><a href="contact-page.php">Contact</a></li>
    
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
        <!-- Reposnive bar open and close -->
      </nav>
      <h1 class="heading-products-text">personenauto's</h1>
    </section>

    <div class="fleet-page">
      <header class="page-header">
        <div class="site-content-wrap site-content-wrap_small" style="max-width: 51.125rem;">
          <h1 class="heading-1">Een auto huren bij POC Share Wheels</h1>
          <h2 class="intro-text">
            <div class="markdown">
              <p>
                Heb jij een huurauto nodig? POC Share Wheels introduceert nu een
                wagenpark met verschillende topmerken. Voor elk moment hebben
                wij voor u een passende huurauto. Bovendien rijd je altijd in
                een jonge auto en ben je standaard verzekerd bij POC Share
                Wheels. Kom je er niet uit? Neem dan gerust contact met ons op
                of mail naar infopocsharewheels@gmail.com
              </p>
            </div>
          </h2>
        </div>
      </header>

      <div class="site-content-wrap" style="margin-top: 60px;">
        <div class="main-categories">
          <a
            href="fleetpark-carproducts.php"
            class="main-categories_link active"
          >
            <div class="main-categories_link-image">
              <img
                src="car-products/car-type-car.png"
                width="43"
                height="18"
                alt="Personenauto's"
              />
            </div>
            <span class="main-categories_link-label">Personenauto's</span>
          </a>

          <a href="fleetpark-vanproducts.php" class="main-categories_link">
            <div class="main-categories_link-image">
              <img
                src="car-products/car-type-van.png"
                width="46"
                height="19"
                alt="Bestelauto's"
              />
            </div>
            <span class="main-categories_link-label">Bestelauto's</span>
          </a>

          <a href="fleetpark-luxuryproducts.php" class="main-categories_link">
            <div class="main-categories_link-image">
              <img
                src="car-products/porsche_taycan.png"
                width="61"
                height="33"
                alt="Luxe auto's"
              />
            </div>
            <span class="main-categories_link-label">Luxe auto's</span>
          </a>
        </div>
      </div>

      <div class="fleet-page_results tmpl-bg-grey">
        <section class="car-finder-results">
          <div class="site-content-wrap">
            <div class="grid two-columns">
              <div class="grid-item one-third-column">
                <section class="vehicle-filters">
                  <h2>
                    <button type="button" class="vehicle-filters_modal-btn">
                      <div class="vehicle-filter">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="19"
                          height="16"
                          fill="currentColor"
                          class="bi bi-filter"
                          viewBox="0 0 19 16"
                        >
                          <path
                            d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                          />
                          
                        </svg>
                        Filters
                      </div>
                    </button>
                  </h2>

                  <div class="vehicle-filters_active-filters-heading">
                    <h2>
                      Filters
                      <span class="vehicle-filters_active-filter-count" id="vehicle-filter-count" value="0">0</span>
                    </h2>
                    <button class="vehicle-filters_reset-btn" id="vehicle_reset_btn">
                      Verwijder filters
                    </button>
                  </div>

                  <div class="vehicle-filters_modal" id="filters-modal">
                    <header class="vehicle-filters_modal-header">
                      <div class="vehicle-filter">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="19"
                          height="16"
                          fill="currentColor"
                          class="bi bi-filter"
                          viewBox="0 0 19 16"
                        >
                          <path
                            d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                          />
                          Filters
                        </svg>
                        <button type="button" class="vehicle-filters_close-btn">
                          <div class="icon-close">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="16"
                              height="16"
                              fill="currentColor"
                              class="bi bi-x-circle"
                              viewBox="0 0 16 16"
                            >
                              <path
                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                              />
                              <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                              />
                            </svg>
                          </div>
                        </button>
                      </div>
                    </header>

                    <div class="vehicle-filters_groups">
                      <fieldset class="vehicle-filters_group">
                        <div>
                          <legend>Model</legend>
                        </div>

                        <div class="vehicle-filters_checkboxes">
                          <div class="checkbox-base checkbox-filter">
                            <input type="checkbox" id="checkbox-personenauto" value="Personenauto" onclick="checkBoxCar()"/>
                            <label for="checkbox-personenauto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 19 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                            </svg>
                              <span style="margin-bottom: 20px;">
                                Personenauto (3)
                              </span>
                            </label>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </section>
              </div>


                   <div class="grid-item two-thirds-column">
                      <div class="car-finder-results_results">
                         <div class="car-finder-results_summary">
                            <h2 class="car-finder-results_title">
                               3
                               <span> resultaten</span>
                            </h2>
                            <p class="car-finder-results_subtitle"></p>
                         </div>


                         <section class="vehicle-result-list">
                            <ul class="vehicle-result-list_list">
                               <li class="vehicle-result-list_item">
                                 <div class="vehicle vehicle-result" id="RCAR">
                                   <div>
                                     <div class="card vehicle_card">
                                       <div class="grid two-columns align-items-start">
                                        <div class="grid-item">
                                          <div class="vehicle-header">
                                            <h2 class="vehicle-header_title">
                                              Renault Clio
                                              <span name="token-id">(RCAR)</span>
                                            </h2>
                                            <span class="vehicle-header_subtitle"> Of gelijkwaardig / Personenauto </span>
                                          </div>
                                          <figure class="vehicle-image">
                                             <picture class="image-lazyloaded">
                                               <img width="400" height="230" src="car-products/renault_clio_tech.png" class="lazy-img loaded" alt="personenauto" loading="lazy">
                                             </picture>
                                          </figure>
                                          <div class="vehicle_image-actions text-center"></div>
                                        </div>


                                        <div class="grid-item vehicle_card-features">
                                          <div class="vehicle_features">
                                             <div class="vehicle_feature">
                                               <p class="vehicle_feature vehicle_extra"> Minimale leeftijd bestuurder 18 jaar </p>
                                               <p class="vehicle_feature vehicle_extra"> All-season banden op aanvraag </p>
                                               <ul class="icon-list">
                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-fuel-pump" viewBox="0 0 19 16">
                                                    <path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-5Z"/>
                                                    <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8V2Z"/>
                                                  </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                     <div class="markdown">
                                                      <p>Benzine</p>
                                                     </div>
                                                   </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-manual-gearbox" width="24" height="24" viewBox="0 0 24 24" 
                                                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="5" cy="6" r="2"/><circle cx="12" cy="6" r="2"/><circle cx="19" cy="6" r="2"/>
                                                      <circle cx="5" cy="18" r="2"/><circle cx="12" cy="18" r="2"/><line x1="5" y1="8" x2="5" y2="16"/><line x1="12" y1="8" x2="12" y2="16"/>
                                                      <path d="M19 8v2a2 2 0 0 1 -2 2h-12"/>
                                                    </svg>                                  
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>Handgeschakeld</p>
                                                    </div>
                                                  </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 19 16">
                                                      <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                                     </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>4 zitplaatsen</p>
                                                    </div>
                                                  </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                  <span class="icon-list_item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-door-closed-fill" viewBox="0 0 19 16">
                                                     <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                    </svg>
                                                  </span>

                                                  <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>5 deuren</p>
                                                    </div>
                                                  </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                                      <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                                     </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>1 koffer</p>
                                                    </div>
                                                  </span>

                                                 </li>
                                                 
                                                 <li class="icon-list_item">
                                                 <span class="icon-list_item-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snow" viewBox="0 0 16 16">
                                                    <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z"/>
                                                  </svg>
                                                </span>

                                                <span class="icon-list_item-text">
                                                  <div class="markdown">
                                                    <p>Airco</p>
                                                  </div>
                                                </span>

                                                 </li>
                                               </ul>
                                             </div>
                                          </div>

                                          <div class="vehicle_prices">
                                            <a class="btn btn-primary vehicle_cta" href="?main-category=car&category=RCAR">
                                              Reserveer deze auto
                                            </a>

                                            <div class="text-center">
                                               <a class="btn btn-transparent btn-icon vehicle_card-expander-btn" href="#">
                                                <span>Meer informatie</span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </li>


                               <li class="vehicle-result-list_item">
                               <div class="vehicle vehicle-result" id="TYAR" name="car-result">
                                   <div>
                                     <div class="card vehicle_card">
                                       <div class="grid two-columns align-items-start">
                                        <div class="grid-item">
                                          <div class="vehicle-header">
                                            <h2 class="vehicle-header_title">
                                              Toyota Yaris CBE
                                              <span name="token-id">(TYAR)</span>
                                            </h2>
                                            <span class="vehicle-header_subtitle"> Of gelijkwaardig / Personenauto </span>
                                          </div>
                                          <figure class="vehicle-image">
                                             <picture class="image-lazyloaded">
                                               <img width="353" height="199" src="car-products/toyota_yaris_cbe.png" class="lazy-img loaded" alt="personenauto" loading="lazy">
                                             </picture>
                                          </figure>
                                          <div class="vehicle_image-actions text-center"></div>
                                        </div>


                                        <div class="grid-item vehicle_card-features">
                                          <div class="vehicle_features">
                                             <div class="vehicle_feature">
                                               <p class="vehicle_feature vehicle_extra"> Minimale leeftijd bestuurder 18 jaar </p>
                                               <p class="vehicle_feature vehicle_extra"> All-season banden op aanvraag </p>
                                               <ul class="icon-list">
                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-fuel-pump" viewBox="0 0 19 16">
                                                    <path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-5Z"/>
                                                    <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8V2Z"/>
                                                  </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                     <div class="markdown">
                                                      <p>Benzine</p>
                                                     </div>
                                                   </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-manual-gearbox" width="24" height="24" viewBox="0 0 24 24" 
                                                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="5" cy="6" r="2"/><circle cx="12" cy="6" r="2"/><circle cx="19" cy="6" r="2"/>
                                                      <circle cx="5" cy="18" r="2"/><circle cx="12" cy="18" r="2"/><line x1="5" y1="8" x2="5" y2="16"/><line x1="12" y1="8" x2="12" y2="16"/>
                                                      <path d="M19 8v2a2 2 0 0 1 -2 2h-12"/>
                                                    </svg>                                  
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>Handgeschakeld</p>
                                                    </div>
                                                  </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 19 16">
                                                      <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                                     </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>5 zitplaatsen</p>
                                                    </div>
                                                  </span>

                                                 </li>
                                                 <li class="icon-list_item">
                                                  <span class="icon-list_item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-door-closed-fill" viewBox="0 0 19 16">
                                                     <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                    </svg>
                                                  </span>

                                                  <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>5 deuren</p>
                                                    </div>
                                                  </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                                      <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                                     </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>1 koffer</p>
                                                    </div>
                                                  </span>

                                                 </li>
                                                 <li class="icon-list_item">
                                                 <span class="icon-list_item-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snow" viewBox="0 0 16 16">
                                                    <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z"/>
                                                  </svg>
                                                </span>

                                                <span class="icon-list_item-text">
                                                  <div class="markdown">
                                                    <p>Airco</p>
                                                  </div>
                                                </span>

                                                 </li>
                                               </ul>
                                             </div>
                                          </div>

                                          <div class="vehicle_prices">
                                            <a class="btn btn-primary vehicle_cta" href="?main-category=car&category=TYAR">
                                              Reserveer deze auto
                                            </a>

                                            <div class="text-center">
                                               <a class="btn btn-transparent btn-icon vehicle_card-expander-btn" href="#">
                                                <span>Meer informatie</span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </li>
                               <li class="vehicle-result-list_item">
                               <div class="vehicle vehicle-result" id="OMAR">
                                   <div>
                                     <div class="card vehicle_card">
                                       <div class="grid two-columns align-items-start">
                                        <div class="grid-item">
                                          <div class="vehicle-header">
                                            <h2 class="vehicle-header_title">
                                              Opel Mokka
                                              <span name="token-id">(OMAR)</span>
                                            </h2>
                                            <span class="vehicle-header_subtitle"> Of gelijkwaardig / Personenauto </span>
                                          </div>
                                          <figure class="vehicle-image">
                                             <picture class="image-lazyloaded">
                                               <img width="400" height="230" src="car-products/opel_mokka_v2.png" class="lazy-img loaded" alt="personenauto" loading="lazy">
                                             </picture>
                                          </figure>
                                          <div class="vehicle_image-actions text-center"></div>
                                        </div>


                                        <div class="grid-item vehicle_card-features">
                                          <div class="vehicle_features">
                                             <div class="vehicle_feature">
                                               <p class="vehicle_feature vehicle_extra"> Minimale leeftijd bestuurder 18 jaar </p>
                                               <p class="vehicle_feature vehicle_extra"> All-season banden op aanvraag </p>
                                               <ul class="icon-list">
                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-fuel-pump" viewBox="0 0 19 16">
                                                    <path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-5Z"/>
                                                    <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8V2Z"/>
                                                  </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                     <div class="markdown">
                                                      <p>Benzine</p>
                                                     </div>
                                                   </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-manual-gearbox" width="24" height="24" viewBox="0 0 24 24" 
                                                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="5" cy="6" r="2"/><circle cx="12" cy="6" r="2"/><circle cx="19" cy="6" r="2"/>
                                                      <circle cx="5" cy="18" r="2"/><circle cx="12" cy="18" r="2"/><line x1="5" y1="8" x2="5" y2="16"/><line x1="12" y1="8" x2="12" y2="16"/>
                                                      <path d="M19 8v2a2 2 0 0 1 -2 2h-12"/>
                                                    </svg>                                  
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>Automaat</p>
                                                    </div>
                                                  </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 19 16">
                                                      <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                                     </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>5 zitplaatsen</p>
                                                    </div>
                                                  </span>

                                                 </li>
                                                 <li class="icon-list_item">
                                                  <span class="icon-list_item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-door-closed-fill" viewBox="0 0 19 16">
                                                     <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                    </svg>
                                                  </span>

                                                  <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>5 deuren</p>
                                                    </div>
                                                  </span>

                                                 </li>

                                                 <li class="icon-list_item">
                                                   <span class="icon-list_item-icon">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                                      <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                                     </svg>
                                                   </span>

                                                   <span class="icon-list_item-text">
                                                    <div class="markdown">
                                                      <p>1 koffer</p>
                                                    </div>
                                                  </span>

                                                 </li>
                                                 <li class="icon-list_item">
                                                 <span class="icon-list_item-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snow" viewBox="0 0 16 16">
                                                    <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z"/>
                                                  </svg>
                                                </span>

                                                <span class="icon-list_item-text">
                                                  <div class="markdown">
                                                    <p>Airco</p>
                                                  </div>
                                                </span>

                                                 </li>
                                               </ul>
                                             </div>
                                          </div>

                                          <div class="vehicle_prices">
                                            <a class="btn btn-primary vehicle_cta" href="?main-category=car&category=OMAR">
                                              Reserveer deze auto
                                            </a>

                                            <div class="text-center">
                                               <a class="btn btn-transparent btn-icon vehicle_card-expander-btn" href="#">
                                                <span>Meer informatie</span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </li>
                            </ul>
                         </section>
                      </div>
                   </div>

          <section class="cta">
              <h1>GET READY FOR CONTACT</h1>
              <h4>Heeft u meer vragen over onze producten, prijzen en voorwaarden? <br> Neem gerust contact met ons op.</h4>
              <a href="contact.html" class="hero_btn-contact">CONTACT US</a>
          </section> 
       <!-- Call to Action End -->

       <!-- Footer Section Start -->
       <body>
              <div class="container my-5">

                     <footer
                     class="text-center text-lg-start text-white" style="background-color: #000; border-radius: 25px;">

                     <section class="d-flex justify-content-between p-4" 
                     style="background-color: #777">
                     <div class="me-5">
                            <span>Volg ons op onze sociale media:</span>
                          </div>
                          <div>
                            <a href="https://www.facebook.com/" class="text-white me-4">
                                 <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.twitter.com/" class="text-white me-4">
                                   <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="text-white me-4">
                                   <i class="fab fa-instagram"></i>
                                 </a>
                            <a href="https://www.linkedin.com/feed/" class="text-white me-4">
                                   <i class="fab fa-linkedin"></i>
                            </a>
                            </div>
                     </section>

                     <section class="">
                            <div class="container text-center text-md-start mt-5">
                              <!-- Grid row -->
                              <div class="row mt-3">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                  <!-- Content -->
                                  <h6 class="text-uppercase fw-bold">POC Share Wheels</h6>
                                  <h6>
                                    Bij POC Share Wheels bieden wij de toekomst van auto's huren.
                                    Altijd alles tegen een scherpe lage prijs, zeer goede kwaliteit.
                                    De toekomst van huren. POC Share Wheels.
                                  </h6>
                                </div>
                                <!-- Grid column -->
                      
                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                  <!-- Links -->
                                  <h6 class="text-uppercase fw-bold">Over Ons</h6>
                                  <p>
                                    <a href="about.html" class="text-white">Lease</a>
                                  </p>
                                  <p>
                                    <a href="about.html" class="text-white">Levering en Service</a>
                                  </p>
                                  <p>
                                    <a href="about.html" class="text-white">Prijzen en Voorwaarden</a>
                                  </p>
                                 
                                </div>
                                <!-- Grid column -->
                      
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                  <!-- Links -->
                                  <h6 class="text-uppercase fw-bold">Producten</h6>
                                  <p>
                                    <a href="about.html" class="text-white">Personenauto's</a>
                                  </p>
                                  <p>
                                    <a href="about.html" class="text-white">Bestelwagens</a>
                                  </p>
                                  <p>
                                    <a href="about.html" class="text-white">Sportauto's</a>
                                  </p>
                                </div>
                                <!-- Grid column -->
                      
                                <!-- Grid column -->
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                  <!-- Links -->
                                  <h6 class="text-uppercase fw-bold">Contact</h6>
                                  <p style="color: #fff;"><i class="fas fa-home mr-3"></i> Apollolaan 1, 1076 NN, AM</p>
                                  <p style="color: #fff; font-size: 14px;"><i class="fas fa-envelope mr-3"></i> infopocsharewheels@gmail.com</p>
                                  <p style="color: #fff;"><i class="fas fa-phone mr-3"></i> +31 06 86 10 37 26</p>
                                </div>
                                <!-- Grid column -->

                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                   <!-- Links -->
                                   <h6 class="text-uppercase fw-bold">Conacttijden</h6>
                                   <h5>MA : 9:00 - 17:00</h5>
                                   <h5>DI : 9:00 - 17:00</h5>
                                   <h5>WO : 9:00 - 17:00</h5>
                                   <h5>DO : 9:00 - 17:00</h5>
                                   <h5>VR : 9:00 - 17:00</h5>
                                   <h5>ZA : 9:00 - 12:00</h5>
                                   <h5>ZO : 9:00 - 12:00</h5>
                                 </div>
                              </div>
                              <!-- Grid row -->
                            </div>
                            <h2 class="copyright-text">&copy; POC Share Wheels. 2022 Rights Reserved. Version : 1.0.</h2>
                          </section>
                        
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
          </body>

              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  

    <script src="script.js"></script>
  </body>
</html>
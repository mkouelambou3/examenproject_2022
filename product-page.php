<!DOCTYPE html>
<html lang="en">


<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>POC Share Wheels - Products Page</title>
       <link rel="stylesheet" href="product-page.css">
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
                     <a href="home.php" class="logo">
                            <i class="fa-solid fa-car-side"></i> POC Share Wheels
                     </a>
                     <div class="nav-links" id="navLinks">
                            <!-- Reposnive bar open and close -->
                            <i class="fa fa-times" onclick="hideMenu()"></i>
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                <li><a href="about.html">Over Ons</a></li>
                                <li><a href="product-page.php">Producten</a></li>
                                <li style="display: none;"><a href="#">Reserveren</a></li>
                                <div class="dropdown" style="display: none;">
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
              <h1>Onze Producten</h1>
</section>
</body>
<body>

      <div style="margin-top: 65px;">
        <div class="site-content-wrap visual-and-text-block">
          <div class="grid two-columns from-desktop visual-and-text-block_content">
            <div class="grid-item visual-and-text-block_text-first">
              <div class="content-block">
                <h2 class="heading-2 content-block_title">Een auto huren Bij POC Share Wheels</h2>
                <div class="content-block-expandable_content">
                  <div class="markdown">
                    <p>
                      Wilt u een auto huren bij POC Share Wheels? Bijvoorbeeld om een dagje te touren, of een dagje uit.
                      POC Share Wheels staat voor je klaar! Kiest u voor auto, bestelwagen of luxe auto? Bij POC Share Wheels
                      ben je bij het juiste adres. Wij bieden het wagenpark aan, een plek uit onze producten die wij speciaal 
                      bieden voor de klant.
                    </p>
                     <p>
                      Wil je nog meer weten over onze producten? Check dan vandaag onze wagenpark. Heeft u eventueel nog 
                      verdere vragen? Neem dan gerust met contact ons op? Voor meer info, check de tijden waar u met ons 
                      contact zou willen opnemen.
                     </p>

                     <p class="highlight-product-text">Let op, als u gebruik wilt maken van de meest recente dingen zoals een auto huren adviseren wij u om een account aan te maken
                      of inloggen als u er een al heeft.
                     </p>
                  </div>
                  <div class="content-block_links">
                    <a href="fleetpark-carproducts.php" class="btn-secondary btn-large">Bekijk ons wagenpark</a>
                  </div>
                </div>
              </div>
            </div>
             <div class="grid-item">
              <div class="visual-and-text-block_image image-block">
                <picture class="image-lazyloaded">
                  <img src="images/rent-car-image.png" class="lazy-img loaded" alt="family-picture" loading="lazy">
                </picture>
              </div>
             </div>
          </div>
        </div>
      </div>

          <div>
          <div class="vehicle-overview-block site-content-wrap content-block" id="modellen">
            <h2 class="heading-2 text-center block-title">Onze auto's</h2>
            <div class="grid three-columms">
              <div class="grid-item">
                <a href = "book-finder.php?main_category=car&token-id=RCAR" class="link-car" id="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title" name="category">
                          Renault Clio 
                          <span name="token-id">(RCAR)</span>
                        </h2>
                        <span class="vehicle-header_subtitle">Of Gelijkwaardig / Personenauto</span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="400" height="230" src="car-products/renault_clio_tech.png" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
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

                      <hr class="vehicle_divider">

                    </div>

                    <div>
                      <div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                    </div>
                  </div>
                </a>
              </div>


              
              <div class="grid-item">
                <a href = "book-finder.php?main_category=car&token-id=TYAR" class="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title" name="category">
                          Toyota Yaris CBE 
                          <span name="token-id">(TYAR)</span>
                        </h2>
                        <span class="vehicle-header_subtitle">Of Gelijkwaardig / Personenauto</span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="353" height="199" src="car-products/toyota_yaris_cbe.jpg" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
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

                      <hr class="vehicle_divider">

                    </div>

                    <div>
                       <div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                    </div>
                  </div>
                </a>
              </div>







              <div class="grid-item">
                <a href = "book-finder.php?main_category=car&token-id=OMAR" class="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title" name="category">
                          Opel Mokka 
                          <span name="token-id">(OMAR)</span>
                        </h2>
                        <span class="vehicle-header_subtitle">Of Gelijkwaardig / Personenauto</span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="353" height="199" src="car-products/opel_mokka_v2.png" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
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

                      <hr class="vehicle_divider">

                    </div>

                    <div>
                      <div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="vehicle-overview-block site-content-wrap content-block">
            <h2 class="heading-2 text-center block-title">Onze bestelauto's</h2>
            <div class="grid three-columms">
              <div class="grid-item">
                <a href="book-finder.php?main_category=van&token-id=VCVN" class="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title">
                          Volkswagen Caddy
                          <span name="token-id">(VCVN)</span>
                        </h2>
                        <span class="vehicle-header_subtitle"> Of gelijkwaardig / Bestelauto </span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="353" height="199" src="car-products/volkswagen_caddy.png" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
                        <p class="vehicle_feature vehicle_extra"> Minimale leeftijd bestuurder 21 jaar</p>
                        <p class="vehicle_feature vehicle_extra"> Trekhaak en all-season banden op aanvraag </p>
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
                                <p>Diesel</p>
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
                                <p>2 zitplaatsen</p>
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
                                <p>4 deuren</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                               <path d="M510.3 445.9L437.3 153.8C433.5 138.5 420.8 128 406.4 128H346.1c3.625-9.1 5.875-20.75 5.875-32c0-53-42.1-96-96-96S159.1 43 159.1 96c0 11.25 2.25 22 5.875 32H105.6c-14.38 0-27.13 10.5-30.88 25.75l-73.01 292.1C-6.641 479.1 16.36 512 47.99 512h416C495.6 512 518.6 479.1 510.3 445.9zM256 128C238.4 128 223.1 113.6 223.1 96S238.4 64 256 64c17.63 0 32 14.38 32 32S273.6 128 256 128z"/></svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>600 kg laadverm.</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 19 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>3 m³ inhoud.</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>Rijbewijs B</p>
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
                    <hr class="vehicle_divider">
                    </div>

                    <div>
                      <div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                    </div>


                  </div>
                </a>
              </div>

              <div class="grid-item">
                <a href="book-finder.php?main_category=van&token-id=MBVN" class="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title">
                          Mercedes Benz Vito
                          <span name="token-id">(MBVN)</span>
                        </h2>
                        <span class="vehicle-header_subtitle"> Of gelijkwaardig / Bestelauto </span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="353" height="199" src="car-products/mercedes_benz_vito.png" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
                        <p class="vehicle_feature vehicle_extra"> Minimale leeftijd bestuurder 21 jaar</p>
                        <p class="vehicle_feature vehicle_extra"> Trekhaak en all-season banden op aanvraag </p>
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
                                <p>Diesel</p>
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
                                <p>3 zitplaatsen</p>
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
                                <p>2 deuren</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                               <path d="M510.3 445.9L437.3 153.8C433.5 138.5 420.8 128 406.4 128H346.1c3.625-9.1 5.875-20.75 5.875-32c0-53-42.1-96-96-96S159.1 43 159.1 96c0 11.25 2.25 22 5.875 32H105.6c-14.38 0-27.13 10.5-30.88 25.75l-73.01 292.1C-6.641 479.1 16.36 512 47.99 512h416C495.6 512 518.6 479.1 510.3 445.9zM256 128C238.4 128 223.1 113.6 223.1 96S238.4 64 256 64c17.63 0 32 14.38 32 32S273.6 128 256 128z"/></svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>660 kg laadverm.</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 19 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>18 m³ inhoud.</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>Rijbewijs B</p>
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
                    <hr class="vehicle_divider">
                    </div>

                    <div>
                      <div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                    </div>


                  </div>
                </a>
              </div>

              <div class="grid-item">
                <a href="book-finder.php?main_category=van&token-id=PTVN" class="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title">
                          Peugot Expert
                          <span name="token-id">(PTVN)</span>
                        </h2>
                        <span class="vehicle-header_subtitle"> Of gelijkwaardig / Bestelauto </span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="353" height="199" src="car-products/peugot_expert.png" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
                        <p class="vehicle_feature vehicle_extra"> Minimale leeftijd bestuurder 21 jaar</p>
                        <p class="vehicle_feature vehicle_extra"> Trekhaak en all-season banden op aanvraag </p>
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
                                <p>Diesel</p>
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
                                <p>3 zitplaatsen</p>
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
                                <p>4 deuren</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                               <path d="M510.3 445.9L437.3 153.8C433.5 138.5 420.8 128 406.4 128H346.1c3.625-9.1 5.875-20.75 5.875-32c0-53-42.1-96-96-96S159.1 43 159.1 96c0 11.25 2.25 22 5.875 32H105.6c-14.38 0-27.13 10.5-30.88 25.75l-73.01 292.1C-6.641 479.1 16.36 512 47.99 512h416C495.6 512 518.6 479.1 510.3 445.9zM256 128C238.4 128 223.1 113.6 223.1 96S238.4 64 256 64c17.63 0 32 14.38 32 32S273.6 128 256 128z"/></svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>1170 kg laadverm.</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 19 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>11 m³ inhoud.</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>Rijbewijs B</p>
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
                    <hr class="vehicle_divider">
                    </div>

                    <div>
                    <div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                    </div>


                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>


        <div>
          <div class="vehicle-overview-block site-content-wrap content-block">
            <h2 class="heading-2 text-center block-title">Onze Luxe auto's</h2>
            <div class="grid three-columms">
              <div class="grid-item">
                <a href="book-finder.php?main_category=luxe-car&token-id=PPLR" class="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title">
                          Porsche 911 RS
                          <span name="token-id">(PPLR)</span>
                        </h2>
                        <span class="vehicle-header_subtitle"> Of gelijkwaardig / Luxe auto </span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="353" height="199" src="car-products/porsche_panamera_turbo-s.png" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
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
                                <p>4 deuren</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>315 km p/h</p>
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
                      <hr class="vehicle_divider">
                      <div>
                        	<div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                      </div>
                      

                    </div>
                  </div>
                </a>
              </div>


              <div class="grid-item">
                <a href="book-finder.php?main_category=luxe-car&token-id=RPLR" class="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title">
                          Rolls Royce Phantom CM
                          <span name="token-id">(RPLR)</span>
                        </h2>
                        <span class="vehicle-header_subtitle"> Of gelijkwaardig / Luxe auto </span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="353" height="199" src="car-products/rolls_royce_phantom_cm.png" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
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
                                <p>2 zitplaatsen</p>
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
                                <p>2 deuren</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>250 km p/h</p>
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
                      <hr class="vehicle_divider">
                      <div>
                        <div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                      </div>
                      

                    </div>
                  </div>
                </a>
              </div>


              <div class="grid-item">
                <a href="book-finder.php?main_category=luxe-car&token-id=CCLR" class="link-car">
                  <div class="vehicle-overview-block_card card">
                    <div>
                      <div class="vehicle-header">
                        <h2 class="vehicle-header_title">
                          Corvette C8
                          <span name="token-id">(CCLR)</span>
                        </h2>
                        <span class="vehicle-header_subtitle"> Of gelijkwaardig / Luxe auto </span>
                      </div>

                      <figure class="vehicle-image">
                        <picture class="image-lazyloaded">
                          <img width="353" height="199" src="car-products/corvette_c8.png" class="lazy-img loaded" loading="lazy">
                        </picture>
                      </figure>

                      <div class="vehicle_features">
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
                                <p>4 deuren</p>
                              </div>
                            </span>
                          </li>

                          <li class="icon-list_item">
                            <span class="icon-list_item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                              </svg>
                            </span>

                            <span class="icon-list_item-text">
                              <div class="markdown">
                                <p>315 km p/h</p>
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
                      <hr class="vehicle_divider">
                      <div>
                        <div class="btn btn-tertiary" type="submit" name="selected-product-btn">Reserveer dit voertuig</div>
                      </div>
                      

                    </div>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>
 


        <!-- Call to Action Start -->

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
                            <a href="about.php" class="text-white">Lease</a>
                          </p>
                          <p>
                            <a href="about.php" class="text-white">Levering en Service</a>
                          </p>
                          <p>
                            <a href="about.php" class="text-white">Prijzen en Voorwaarden</a>
                          </p>
                         
                        </div>
                        <!-- Grid column -->
              
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                          <!-- Links -->
                          <h6 class="text-uppercase fw-bold">Producten</h6>
                          <p>
                            <a href="fleetpark-carproducts.php" class="text-white">Personenauto's</a>
                          </p>
                          <p>
                            <a href="fleetpark-vanproducts.php" class="text-white">Bestelwagens</a>
                          </p>
                          <p>
                            <a href="fleetpark-luxuryproducts.php" class="text-white">Sportauto's</a>
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
                           <h6 class="text-uppercase fw-bold" style="margin-left: 10px;">Conacttijden</h6>
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
</body>
</html>
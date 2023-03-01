<!DOCTYPE html>
<html lang="en">


<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>POC Share Wheels - Car Rental Website</title>
       <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" 
       href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
       crossorigin="anonymous"></script>
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
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

       body {
              animation: fadeIn 4s;
       }
</style>
<body>
       
       <section class="header">

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
                                <li><a href="#">Producten</a></li>
                                <li><a href="#">Reserveren</a></li>
                                <li><a href="#">Account</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <i class="fa fa-bars" onclick="showMenu()"></i>
                        <!-- Reposnive bar open and close -->
              </nav>


              <div class="text_box">
                     <h2>GET IN TOUCH</h2>
                     <p id="headtext">DISCOVER OUR CAR RENTALSHIP</p>
                     <p class="text">POC Share Wheels zijn opgericht als een manier om duurzaam te rijden. <br>
                     Het is efficent voor toegankelijke  reguliere chauffeurs. "Wat mensen nodig <br> hebben, 
                     is regulier vervoer."</p>
                     <a href="about.html" class="hero_btn">Visit Us Today</a>

              </div>
       </section>
       <!-- Course Section Start-->
       <section class="course">
              <div class="PageBlock">
                     <div class="verticalLine"></div>
                     <div class="Clear"></div>
              </div>
               <h1>CHECK ONZE DIENSTEN <br> & ASSORTIMENT</h1>
               <p>Ontdek hier onze diensten/assortiment bij POC Share Wheels.</p>

               <div class="row">
                     <div class="course-col">
                            <img src="images/lease-icon.png" class="icon-1">
                            <h3>Lease</h3>
                            <p>Lekker gemakkelijk, efficent en snel. 
                             Bij POC Share Wheels kunt u altijd een lease auto huren
                            voor de beste tarief en prijs.</p>
                            <a href="about.html" class="hero_btn-2">Lees Meer</a>
                     </div>
                     <div class="course-col">
                            <img src="images/car-service.png" class="icon-2">
                            <h3>Levering en Service</h3>
                            <p>Levering en Service gaat lekker soepel bij POC Share Wheels.
                             Wij zorgen voor uitstekende levering en service is zo lekker snel geregeld.
                            </p>
                            <a href="about.html" class="hero_btn-3">Lees Meer</a>
                     </div>
                     <div class="course-col">
                            <img src="images/car-price.png" class="icon-3">
                            <h3>Prijzen en Voorwaarden</h3>
                            <p>Lage prijzen, vaste tarieven.
                             Bij POC Share Wheels kunt u kiezen uit meerdere verschillende auto's,
                             van normale auto's tot aan bestelwagens en eventueel vrachtauto's.
                            </p>
                            <a href="about.html" class="hero_btn-4">Lees Meer</a>
                     </div>
                 </div>
       </section>
       <!-- Course Section End-->

       <!-- Campus Section Start-->
       <section class="campus">
              <div class="PageBlock">
                     <div class="verticalLine"></div>
                     <div class="Clear"></div>
              </div>
              <h1>ONZE PRODUCTEN</h1>
              <p>Bij POC Share Wheels bieden wij uit ruime keuzes uit: Personenauto's, Bestelwagens's & Sportauto's.</p>

              <div class="row">
                     <div class="campus-col">
                            <img src="images/persons-car.jpg" alt="" class="i-1">
                         <div class="layer-1">
                             <h3>Personenauto's</h3>
                         </div>
                         <a href="#" class="hero_btn-5">Check Het Assortiment</a>

                     </div>
                     <div class="campus-col">
                            <img src="images/delivery-cars.jpg" alt="" class="i-2">
                         <div class="layer-2">
                             <h3>Bestelwagens</h3>
                         </div>
                         <a href="#" class="hero_btn-6">Check Het Assortiment</a>
                     </div>
                     <div class="campus-col">
                            <img src="images/hyper-car.png" alt="" class="i-3">
                         <div class="layer-3">
                            <h3>Sportauto's</h3> 
                         </div>
                         <a href="#" class="hero_btn-7">Check Het Assortiment</a>
                     </div>
                 </div>
       </section>
       <!-- Campus Section End-->


       <!-- Reviews Section Start -->

       <section class="reviews">
              <div class="PageBlock">
                     <div class="verticalLine"></div>
                     <div class="Clear"></div>
              </div>
              <h1>WAT DE KLANTEN ZEGGEN OVER ONS</h1>
              <p>Hier delen onze klanten reviews over het bedrijf POC Share Wheels zelf. Bekijk wat de klanten over ons zeggen.</p>
              
        <div class="row">
              <div class="reviews-col">
                  <img src="images/user.png" alt="oo..">
                  <div>
                      <p>Ik heb zo laatst een auto gehuurd op deze site en de service was geweldig.
                         Mijn vrouw raadde me aan om deze site genaamd POC Share Wheels te bezoeken.
                         Ze leverden een goede car-service, lage prijzen + een wijd genoeg assortiment te kiezen.</p>
                      <h3>Tim Van Dijk</h3>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
              <div class="reviews-col">
                     <img src="images/user-2.png" alt="oo..">
                     <div>
                         <p>Ik heb zo laatst een auto gehuurd op deze site en de service was geweldig.
                            Mijn experince was geweldig op deze site. Alles was helder, duidelijk, overzichtelijk
                            en leuk assortiment uit te kiezen. Klein minpuntje was het contacteren, het heeft wat langer geduurd dan 
                            normaal. Maar voor de rest een leuke site om te bezoeken.</p>
                         <h3>Anne Hof</h3>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                     </div>
              </div>
              <div class="row">
                     <div class="reviews-col">
                         <img src="images/user-3.png" alt="oo..">
                         <div>
                             <p>Ik heb zo laatst een auto gehuurd op deze site en de service was geweldig.
                                Mijn vrouw raadde me aan om deze site genaamd POC Share Wheels te bezoeken.
                                Ze leverden een goede car-service, lage prijzen + een wijd genoeg assortiment te kiezen.
                                Ik zou deze site zeker aanraden!</p>
                             <h3>Pim Hoekstra</h3>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star-half-alt"></i>
                         </div>
                     </div>   
                     <div class="reviews-col">
                            <img src="images/user-4.png" alt="oo..">
                            <div>
                                <p>Ik heb zo laatst een auto gehuurd op deze site en de service was geweldig.
                                   Mijn vrouw raadde me aan om deze site genaamd POC Share Wheels te bezoeken.
                                   Ze leverden een goede car-service, lage prijzen + een wijd genoeg assortiment te kiezen.
                                   Ik zou deze site zeker aanraden!</p>
                                <h3>Anne Letra</h3>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-alt"></i>
                            </div>    
            
       </section>

       <!-- Reviews Section End -->
       <script src="script.js"></script>
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
                     class="text-center text-lg-start text-white" style="background-color: #000; border-radius: 20px;">

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
                            <a href="" class="text-white me-4">
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
                                  <p style="color: #fff;"><i class="fas fa-envelope mr-3"></i> mkouelambou@gmail.com</p>
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
                          </section>
                        
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
          </body>

       <!-- Footer Section End -->
       
       <script src="script.js"></script>
</body>
</html>
<?php

  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != '') {

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $messageSubject = $_POST['name'];
      $userEmail = $_POST['email'];
      $userNumber = $_POST['number'];
      $message = $_POST['message'];

      $to = "karomassudi@live.se"
      $body = "";

      $body .= "Namn: ".$messageSubject. "\r\n";
      $body .= "Mail: ".$userEmail. "\r\n";
      $body .= "Nummer: ".$userNumber. "\r\n";

      mail($to,$messageSubject,$body);

      $message_sent = true;
    }
  }



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta charset="utf-8">
     <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
     <link rel="stylesheet" href="style.css">
     <title>Bravo</title>
   </head>
   <body>
       <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <a href="#start"><div class="menu-icon"><i class="fas fa-home"></i></div>START</a>
         <a href="#tjanster"><div class="menu-icon"><i class="fas fa-car"></i></div>TJÄNSTER</a>
         <a href="#kontakt"><div class="menu-icon"><i class="fas fa-address-card"></div></i>KONTAKT</a>
       </div>
       <div id="main">
       <div class="container" id="start">
           <div class="header">
             <img class="logo" src="Bravo-logo.png" alt="Logo">
           </div>
           <div class="navbar">
             <div class="logo-icon">
               <img class="logo-icon-image" src="Bravo-logo-icon.png" alt="Logo small">
             </div>
             <div class="menu">
               <a href="#start"><div class="menu-icon"><i class="fas fa-home"></i></div>START</a>
               <a href="#tjanster"><div class="menu-icon"><i class="fas fa-car"></i></div>TJÄNSTER</a>
               <a href="#kontakt"><div class="menu-icon"><i class="fas fa-address-card"></i></div>KONTAKT</a>
             </div>
             <div class="mobile-menu">
               <a href="#" id="sidemenu"><div class="menu-icon"><i class="fas fa-bars"></i></div></a>
             </div>
           </div>
       </div>
       <div class="content" id="tjanster">
         <div class="content-box">
           <div class="image-box">
             <div class="slideshow-container">
               <div class="mySlides fade">
                 <img class="image" src="1.jpg">
               </div>
               <div class="mySlides fade">
                 <img class="image" src="2.jpg">
               </div>
               <div class="mySlides fade">
                 <img class="image" src="3.jpg">
               </div>
               <div class="mySlides fade">
                 <img class="image" src="4.jpg">
               </div>
               <div class="mySlides fade">
                 <img class="image" src="5.jpg">
               </div>
               <div class="mySlides fade">
                 <img class="image" src="6.jpg">
               </div>
               <div class="mySlides fade">
                 <img class="image" src="7.jpg">
               </div>
               <div class="mySlides fade">
                 <img class="image" src="8.jpg">
               </div>
             </div>
             <div style="text-align:center">
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
               <span class="dot"></span>
             </div>
           </div>
           <div class="content-box-2">
             <div class="poster">
               <button class="button" type="button" name="button">SOLFILM</button>
                 <div class="content-text">
                   "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                   <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                   <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                 </div>
             </div>
             <div class="poster">
               <button class="button" type="button" name="button">WRAP</button>
                 <div class="content-text">
                   "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                   <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                   <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                 </div>
             </div>
             <br>

             <br>
           </div>
         </div>
       </div>

       <div class="map">
         <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Tagenev%C3%A4gen%2062%20%20425%2037%20Hisings%20%20K%C3%A4rra&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}</style><a href="https://www.embedgooglemap.net">adding google map to wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div></div>
       </div>
       <div class="content-box-3" id="kontakt">
         <div class="content-info">
           <div class="contact-container">
             <p>Använd formuläret nedan för att kontakta oss, <br>
             du kan även ringa oss på <p1><a href="tel:+46739319943">(+46)739319943</a></p1></p>
             <br>
              <?php
              if($message_sent):
              ?>

              <h1>Tack för ditt meddelande.</h1>

              <?php
              else:
              ?>
             <form action="index.php" method="POST" class="form">
               <div class="form-group">
                 <input type="text" class="form-control" id="name" name="name" placeholder="Namn" tabindex="1" required>
               </div>
               <div class="form-group">
                 <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
               </div>
               <div class="form-group">
                 <input type="text" class="form-control" id="number" name="number" placeholder="Telefon" tabindex="3" required>
               </div>
               <div class="form-group">
                 <textarea class="form-control" rows="9" cols="50" id="message" name="message" placeholder="Skriv ett meddelande..." tabindex="4"></textarea>
               </div>
               <div>
                 <br>
                 <button type="submit" class="btn">Skicka</button>
               </div>
             </form>
             <?php
              endif;
              ?>
           </div>
         </div>
         <div class="sigill"><a href="https://www.uc.se/risksigill2/?showorg=930802-8670&language=swe&special="><img src="sigill.svg" alt="UC"></a></div>
         <div class="footer-mobile">
           <a href="tel:+46739319943"><div class="footer-mobile-item"><i class="fas fa-mobile-alt fa-lg"></i> (+46)739319943</div></a>
           <a href="https://www.google.com/maps?ll=57.785278,11.995895&z=14&t=m&hl=sv-SE&gl=US&mapclient=embed&q=Tagenev%C3%A4gen+62+425+37+Hisings+K%C3%A4rra"><div class="footer-mobile-item"><i class="fas fa-map-marked-alt fa-lg"></i> Tagenevägen 62 425 37 Hisings Kärra</div></a>
           <a href="mailto:info@bravodekor.se"><div class="footer-mobile-item"><i class="far fa-envelope-open fa-lg"></i> info@bravodekor.se</div></a>
           <a href="https://www.facebook.com/bravosolfilmowrap"><div class="footer-mobile-item"><i class="fab fa-facebook fa-lg"></i> @bravosolfilm_wrap</div></a>
           <a href="https://www.instagram.com/bravosolfilm_wrap/"><div class="footer-mobile-item"><i class="fab fa-instagram fa-lg"></i> @bravosolfilmowrap</div></a>
         </div>

       </div>
       <div class="footer">
         <div class="footer-left">
           <a href="tel:+46739319943"><div class="footer-left-item"><i class="fas fa-phone fa-lg"></i> (+46)739319943</div></a>
           <a href="https://www.google.com/maps?ll=57.785278,11.995895&z=14&t=m&hl=sv-SE&gl=US&mapclient=embed&q=Tagenev%C3%A4gen+62+425+37+Hisings+K%C3%A4rra"><div class="footer-left-item"><i class="fas fa-map-marked-alt fa-lg"></i> Tagenevägen 62 - 425 37 Hisings Kärra</div></a>
           <a href="mailto:info@bravodekor.se"><div class="footer-left-item"><i class="far fa-envelope-open fa-lg"></i> Info@bravodekor.se</div></a>
         </div>
         <div class="footer-right">
           <a href="https://www.facebook.com/bravosolfilmowrap"><div class="footer-right-item"><i class="fab fa-facebook fa-lg"></i></div></a>
           <a href="https://www.instagram.com/bravosolfilm_wrap/"><div class="footer-right-item"><i class="fab fa-instagram fa-lg"></i></div></a>
         </div>
       </div>
     </div>
     </div>
     <script src="script.js"></script>
     <script src="https://kit.fontawesome.com/5c8fdf296c.js" crossorigin="anonymous"></script>
   </body>
 </html>

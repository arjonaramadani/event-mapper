<!DOCTYPE html>
<html manifest="file.appcache">
<head>
   <meta charset="UTF-8" />
   <title>Event Mapper</title>
   <link rel="stylesheet" href="/App/css/reset.css">
   <link rel="stylesheet" href="/App/css/Projekti-F1.css" />
</head>
<script>
   window.onload = function () {
      var a = document.getElementById("logini");
      var b = document.getElementById("login");
      a.onclick = function (e) {
         e.preventDefault();
         b.style.display = "block";
      }
      b.onmouseover = function () {
         b.style.display = "block";
      }
      b.onmouseout = function () {
         b.style.display = "none";
      }

   }
</script>
<script>
   var x = document.getElementById("para");
   function gjejlokacionin() {
      if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(showPosition, showError);
      } else {
         x.innerHTML = "Geolocation is not supported by this browser.";
      }
   }

   function showPosition(position) {
      var latlon = position.coords.latitude + "," + position.coords.longitude;

      var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
         + latlon + "&zoom=14&size=400x300&sensor=false";
      document.getElementById("harta").innerHTML = "<img src='" + img_url + "'>";
   }

   function showError(error) {
      switch (error.code) {
         case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
         case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
         case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
         case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
      }
   }
</script>

<body>
   <?php
   // include('App/Projekti1/Controllers/Connection.php');
    ?>

   <header>
      <h1>Event Mapper</h1>
      <hr />
      <ul>
         <nav>
            <li><a href="/index.php">Home</a></li>
            <li><a href="App/Projekti1/music.php">Music</a></li>
            <li><a href="App/Projekti1/sport.php">Sport</a></li>
            <li><a href="App/Projekti1/ratings.php">Rate us</a></li>
            <li><a href="App/Projekti1/about-us.php">About us</a></li>
            <!-- <li class="aboutus"><a href="#abus">About us</a></li> -->
            <li class="aboutus" id="logini"><a href="#">Log In</a></li>
            <li class="aboutus"><a href="App/Projekti1/register.php">Register</a></li>
         </nav>
      </ul>
   </header>
   <div id="login">
      <form method="POST" action="App/Projekti1/Controllers/Login.php">
         <pre> Username:           Password:</pre>
         <input type="text" name="username" placeholder="Username">
         <input type="text" name="password" placeholder="Password">
         <button type="submit">Log in</button>
      </form>
   </div>
   <div id="kryesor">
      <img src="/App/images/event.png" id="kryesorimg" />
   </div>
   <div id="new">
      <h2>ME TE REJAT</h2>
      <br />
   </div>
   <div id="dytesor">
      <fig>
         <img src="/App/images/ronanishliu.jpg">
         <figcaption class="stilifont">
            <p>Perfomanca e radh&#235;s e Rona Nishliut </p>
            <a href="../Projekti-Music/music_html.html#ronan" class="linqe"> Me shume</a>
         </figcaption>
      </fig>
   </div>
   <div id="pese">
      <fig>
         <img src="/App/images/box.jpg">
         <figcaption align="center">
            <p class="stilifont">Turniri i ardhshem i boksit</p>
            <p><a href="../Projekti-Sport/Sport.html#boxi" class="linqe">Me shume</a></p>
         </figcaption>
      </fig>
   </div>

   <!-- <div class="grid-container">
      <div> <img src="../Main/show.jpg">
      </div>
      <div>Qeto i ndreqi me foto a dicka</div>
      <div>3</div>
      <div>4</div>

   </div> -->
   <h1 class="h1-famous">Our Famous Artist in all over the World!</h1>
   <div class="container">
      <div class="mySlides">
         <div class="numbertext">1 / 6</div>
         <img src="/App/images/img_dua.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">2 / 6</div>
         <img src="/App/images/img_granit.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">3 / 6</div>
         <img src="/App/images/img_xherdan.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">4 / 6</div>
         <img src="/App/images/img_rita.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">5 / 6</div>
         <img src="/App/images/img_majlinda.jpg" style="width:100%">
      </div>

      <div class="mySlides">
         <div class="numbertext">6 / 6</div>
         <img src="/App/images/img_bebe.jpg" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      <div class="caption-container">
         <p id="caption"></p>
      </div>

      <div class="row">
         <div class="column">
            <img class="demo cursor" src="/App/images/img_dua1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Dua Lipa">
         </div>
         <div class="column">
            <img class="demo cursor" src="/App/images/img_granit1.jpg" style="width:100%" onclick="currentSlide(2)"
               alt="Granit Xhaka">
         </div>
         <div class="column">
            <img class="demo cursor" src="/App/images/img_xherdan1.jpg" style="width:100%" onclick="currentSlide(3)"
               alt="Xherdan Shaqiri">
         </div>
         <div class="column">
            <img class="demo cursor" src="/App/images/img_rita1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Rita Ora">
         </div>
         <div class="column">
            <img class="demo cursor" src="/App/images/img_majlinda1.jpg" style="width:100%" onclick="currentSlide(5)"
               alt="Majlinda Kelmendi">
         </div>
         <div class="column">
            <img class="demo cursor" src="/App/images/img_bebe1.jpg" style="width:100%" onclick="currentSlide(6)" alt="Bebe Rexha">
         </div>
      </div>
   </div>
   <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
         showSlides(slideIndex += n);
      }

      function currentSlide(n) {
         showSlides(slideIndex = n);
      }

      function showSlides(n) {
         var i;
         var slides = document.getElementsByClassName("mySlides");
         var dots = document.getElementsByClassName("demo");
         var captionText = document.getElementById("caption");
         if (n > slides.length) { slideIndex = 1 }
         if (n < 1) { slideIndex = slides.length }
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[slideIndex - 1].style.display = "block";
         dots[slideIndex - 1].className += " active";
         captionText.innerHTML = dots[slideIndex - 1].alt;
      }
   </script>




   <!-------Footer------>
   <footer>
      <div class="list-footer">

         <h2 id="abus1">Get stared </h2>
         <div class="div-list1">
            <p>Home</p>
            <p>Sign up</p>
            <p>Downloaded</p>
         </div>
         <h2 id="abus2">About Us</h2>
         <div class="div-list2">
            <p>Company information</p>
            <p>Contact Us</p>
            <p>Reviews</p>
         </div>
         <h2 id="abus3">Support </h2>
         <div class="div-list3">
            <p>FAQ</p>
            <p>Help desk</p>
            <p>Forume</p>
         </div>
         <h2 id="abus4">Legal </h2>
         <div class="div-list4">
            <p>Terms of service</p>
            <p>Terms of use</p>
            <p>Privacy Police</p>
         </div>
      </div>

      <img src="/App/images/email_16.png" alt="Email Icon" class="imga">
      <a href="mailto:am38774@ubt-uni.net" target="_blank">Arnela</a>
      <a href="mailto:ab38565@ubt-uni.net" target="_blank">Arberita</a>
      <a href="mailto:ar39181@ubt-uni.net" target="_blank">Arjone</a>
   </footer>
</body>

</html>
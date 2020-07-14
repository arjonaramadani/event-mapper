<!DOCTYPE html>
<html lang="en">

<head manifest="file.appcache">
   <meta charset="UTF-8">
   <title> Sport </title>
   <link rel="stylesheet" href="/App/css/reset.css">
   <link rel="stylesheet" href="/App/css/sport.css" />
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
</head>

<body>
   <header>
      <h1>Event Mapper</h1>
      <hr />
      <ul>
      <nav>
            <li><a href="/index.php">Home</a></li>
            <li><a href="../../App/Projekti1/music.php">Music</a></li>
            <li><a href="#">Sport</a></li>
            <li><a href="../../App/Projekti1/ratings.php">Rate us</a></li>
            <li><a href="../../App/Projekti1/about-us.php">About us</a></li>
            <!-- <li class="aboutus"><a href="#abus">About us</a></li> -->
            <li class="aboutus" id="logini"><a href="#">Log In</a></li>
            <li class="aboutus"><a href="../Register/Register.html" target="_blank">Register</a></li>
         </nav>
      </ul>
   </header>
   <div id="login">
      <form>
         <pre> Username:           Password:</pre>
         <input type="text" placeholder="Username">
         <input type="text" placeholder="Password">
         <button type="submit" formaction="../Main/WorkingOn.html">Log in</button>
      </form>
   </div>
   <div class="div1">
      <h1>SPORT</h1>
   </div>
   <br />
   <div align="center" style="margin-bottom:2%;">
      <img class="mySlides" src="/App/images/mk1.jpg" />
      <img class="mySlides" src="/App/images/sports.png">
      <img class="mySlides" src="/App/images/stdks.jpg">
      <img class="mySlides" src="/App/images/kbpeja.jpg">
      <img class="mySlides" src="/App/images/olympic.jpg">
   </div>
   <script>
      var myIndex = 0;
      carousel();

      function carousel() {
         var i;
         var x = document.getElementsByClassName("mySlides");
         for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
         }
         myIndex++;
         if (myIndex > x.length) {
            myIndex = 1
         }
         x[myIndex - 1].style.display = "block";
         setTimeout(carousel, 3000); // Ndrro fotot qdo 2 seconds
      }
   </script>
   <article>
      <img src="/App/images/kupaks.jpg" title="Foto nga finalja e vitit të kaluar nga kupa e Kosovës" class="image">
      <div class="description">
         <h1 class="emri"><strong>Finalja e Kupës së Kosovës</strong> </h1>
         <hr class="vija">
         <p class="pershkrimi">Finalja e Kupës së Kosovës qe do te mbahet me 18.Maj.2017 duket qe kete sezon do te jete
            shume me interesante , pasi qe drejte finales jane 4 ekipet
            te cilat gjenden ne fillimin e tabeles e ato jane KF.Gjilani , KF.Prishtina , KF.Feronikeli ,
            KF.Trepqa'89.Biletat per finalen pritet te
            dalin në shitje në fillim të vitit 2017 në të gjitha qytetet e Kosovës..
         </p>
         <hr class="vija">
      </div>
   </article>
   <article>
      <div class="descriptionRight">
         <h1 class="emri" id="boxi">Turneu i Boksit "Adem Jashari"</h1>
         <hr class="vija">
         <p class="pershkrimi">
            Sot gjatë komunikatës zyrtare për turneun e boksit "Adem Jashari" u vendos që data e mbajtjes së këtij
            turneu të jetë
            nga 6 deri më 9 mars.Kryetari i federatës së Boksit mes të tjerash potencoi se aty do të marin pjesë edhe
            boksier të shteteve fqinje Ballkanike.
         </p>
         <hr class="vija">
      </div>
      <img src="/App/images/box.jpg" title="Foto nga komunikata zyrtare për turneun" class="image">
   </article>
   <article>
      <img src="/App/images/kbprishtina.jpg" title="Foto KB.Prishtina" class="image">
      <div class="description">
         <h1 class="emri">"KB.Prishtina në finale të Ballkan Ligës"</h1>
         <hr class="vija">
         <p class="pershkrimi">
            KB.Prishtina ka kaluar në finale të ligës Ballkanike,kështu duke mposhtur ekipin nga Bullgaria
            BC.Rilski me rezultatin e ngushtë 95:92 dhe kështu duke kaluar në finalen e cila do të mbahet me datën 12
            Qershor në kryeqytetin e Bullgarise.Presidenti
            i klubit Blerand Stavileci për portalin tonë deklaroi se edhe në finale do të shkojmë vetëm për fitore dhe
            asgjë tjetër.Lojtari kyq
            i lojës gjysmë finale ishte Drilon Hajrizi"
         </p>
         <hr class="vija">
      </div>
   </article>
   <div class="div2">
      <h2 class="emri3">"DERBI I ANAMORAVES"<br><br>Derbi më i rëndësishëm në Superligën e Kosovës luhet këtë të shtunë
         me fillim nga ora 15:00.
         KF.Gjilani edhe pse në renditje tabelare më lartë do ta ketë mjaft të vështirë fitoren kunder rivalit lokal
         FC.Drita.Biletat për ndeshjen i gjeni
         në qender të qytetit të Gjilanit.
      </h2>
      <img src="/App/images/derbi.jpg" title="Skifterat vs Intelektualet" class="image3">
      <img src="/App/images/skifterat.jpg" title="Skifterat gjate derbit" class="image3">
      <img src="/App/images/intelektualet2.jpg" title="Intelektualet gjate derbit" class="image3">
      <img src="/App/images/skifterat2.jpg" title="Skifterat gjate derbit" class="image3">
   </div>
   <div id="majlinda">
      <img src="majlinda.jpg" id="imgleft">
      <p id="pjudo" style="color: white"><span
            style="color:white; font-family:ariel;text-align:center; font-size:170%;"><strong> Majlinda
               Kelmendi</strong></span><br /><br /><br />Majlinda Kelmendi kampione e botës në Xhudo , do të ndeshet
         në roundin e ardhshëm të lojërave Olimpike në Rio me xhudisten nga Kina , ish-kampionen botërore.Majlinda
         potencoi se ndjehet mirë dhe do të
         vazhdojë me përgaditje intensive pasi që e njeh mirë kundershtaren nga Kina.Kosova Events organizon ndjekjen e
         kësaj ndeshje në ekran të madh në Sallën "1 Tetori" ku
         të gjithë të interesuarit për pjesmarrje ,biletat mund ti gjeni në të gjitha pikat e shitjes të telefonisë
         IPKO.
      </p>
      <img src="/App/images/judo.jpg" id="imgright">
   </div>
   <div>
      <table cellspacing="9%" cellpadding="9%" class="tabela1">
         <tr>
            <th colspan="11">
               <h1> Tabela e Superlig&#235;s </h1>
            </th>
         </tr>
         <tr>
            <th>R</th>
            <th>#</th>
            <th>Klubi</th>
            <th>N</th>
            <th>F</th>
            <th>B</th>
            <th>H</th>
            <th>Gsh</th>
            <th>Gp</th>
            <th>Gd</th>
            <th>Piket</th>
         </tr>
         <tr>
            <th>1.</th>
            <td><img src="/App/images/1.png" /></td>
            <td>Trepqa 89</td>
            <td>17</td>
            <td>12</td>
            <td>3</td>
            <td>3</td>
            <td>29</td>
            <td>13</td>
            <td>16</td>
            <td>39</td>
         </tr>
         <tr>
            <th>2.</th>
            <td><img src="/App/images/2.png" /></td>
            <td>Llapi</td>
            <td>17</td>
            <td>11</td>
            <td>3</td>
            <td>3</td>
            <td>20</td>
            <td>13</td>
            <td>7</td>
            <td>36</td>
         </tr>
         <tr>
            <th>3.</th>
            <td><img src="/App/images/3.png" /></td>
            <td>Prishtina</td>
            <td>17</td>
            <td>10</td>
            <td>5</td>
            <td>2</td>
            <td>18</td>
            <td>7</td>
            <td>11</td>
            <td>35</td>
         </tr>
         <tr>
            <th>4.</th>
            <td><img src="/App/images/4.png" /></td>
            <td>Feronikeli</td>
            <td>17</td>
            <td>10</td>
            <td>3</td>
            <td>4</td>
            <td>22</td>
            <td>13</td>
            <td>9</td>
            <td>33</td>
         </tr>
         <tr>
            <th>5.</th>
            <td><img src="/App/images/5.png" /></td>
            <td>Besa</td>
            <td>17</td>
            <td>6</td>
            <td>7</td>
            <td>4</td>
            <td>20</td>
            <td>16</td>
            <td>4</td>
            <td>25</td>
         </tr>
         <tr>
            <th>6.</th>
            <td><img src="/App/images/6.png" /></td>
            <td>Gjilani</td>
            <td>17</td>
            <td>7</td>
            <td>4</td>
            <td>6</td>
            <td>14</td>
            <td>11</td>
            <td>3</td>
            <td>25</td>
         </tr>
         <tr>
            <th style="background-color:	#FF6347">7.</th>
            <td style="background-color:	#FF6347"><img src="/App/images/7.png" /></td>
            <td style="background-color:	#FF6347">Liria</td>
            <td style="background-color:	#FF6347">17</td>
            <td style="background-color:	#FF6347">6</td>
            <td style="background-color:	#FF6347">2</td>
            <td style="background-color:	#FF6347">9</td>
            <td style="background-color:	#FF6347">18</td>
            <td style="background-color:	#FF6347">19</td>
            <td style="background-color:	#FF6347">-1</td>
            <td style="background-color:	#FF6347">20</td>
         </tr>
         <tr>
            <th style="background-color:	#FF6347">8.</th>
            <td style="background-color:	#FF6347"><img src="/App/images/8.png" /></td>
            <td style="background-color:	#FF6347">Drenica</td>
            <td style="background-color:	#FF6347">17</td>
            <td style="background-color:	#FF6347">4</td>
            <td style="background-color:	#FF6347">7</td>
            <td style="background-color:	#FF6347">6</td>
            <td style="background-color:	#FF6347">16</td>
            <td style="background-color:	#FF6347">19</td>
            <td style="background-color:	#FF6347">-3</td>
            <td style="background-color:	#FF6347">19</td>
         </tr>
      </table>
   </div>
   <div>
      <p class="piket">Numri maksimal i pikeve eshte: <span id="piket" onload="max_piket()"></span></p>
   </div>
   <script>
      var piket = [39, 36, 35, 33, 25, 25, 20, 19];
      function max_piket() {
         for (var i = 0; i < piket.length; i++) {
            var x = piket[0];
            if (piket[i] > x)
               x = piket[i];
         }
         return x;
      }
      document.getElementById("piket").innerHTML = max_piket();
   </script>
   <div class="LojratOlimpike">
      <canvas id="myCanvas" width="229%" height="70%" style="border-bottom:1px dotted #1F2E33;"></canvas>
      <script>
         var c = document.getElementById("myCanvas");
         var ctx = c.getContext("2d"); // 2d e cakton me bo drejtza, rreth te canvas
         ctx.font = "30px Arial";
         ctx.strokeText("Lojerat Olimpike", 10, 50);
      </script>
      <svg width="300" height="200">
         <circle cx="50" cy="50" r="40" stroke="blue" stroke-width="4" fill="none" />
         <circle cx="140" cy="50" r="40" stroke="black" stroke-width="4" fill="none" />
         <circle cx="230" cy="50" r="40" stroke="red" stroke-width="4" fill="none" />
         <circle cx="96" cy="100" r="40" stroke="yellow" stroke-width="4" fill="none" />
         <circle cx="185" cy="100" r="40" stroke="green" stroke-width="4" fill="none" />
      </svg>
      <p class="paragrafi"> Lojërat Olimpike apo Olimpiada janë duke udhëhequr ngjarjet
         ndërkombëtare sportive shfaqur konkurse verës dhe dimrit sportive në të cilën mijëra atletë nga e
         gjithë bota marrin pjesë në një shumëllojshmëri të konkurseve . Lojrat Olimpike konsiderohen si më
         kryesorja e konkurrencës sportive në botë me më shumë se 200 kombe pjesëmarrëse.
         Lojërat Olimpike mbahen çdo katër vjet , me verë dhe Winter Games rotacion nga ndodhin çdo katër vjet,
         por dy vjet larg.
         Krijimi i tyre ishte i frymëzuar nga Lojërat Olimpike të lashta , të cilat u mbajtën në Olimpia, Greqi ,
         nga pes shekullin e 8 në shekullin e 4 pas Krishtit. Baron Pierre de Coubertin themeloi
         Komitetin Olimpik Ndërkombëtar (IOC) në vitin 1894. IOC është organi drejtues i Lëvizjes Olimpike.
      </p>
   </div>
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
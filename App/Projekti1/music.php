<!DOCTYPE html>
<html lang="en" manifest="file.appcache">

<head>
   <meta charset="UTF-8">
   <title> Music Events </title>
   <link rel="stylesheet" href="/App/css/reset.css">
   <link rel="stylesheet" href="/App/css/music.css">
   <script src="jquery-3.1.1.min.js"></script>
   <script>
      $(document).ready(function () {
         $(".togglep").click(function () {
            $(".tog2").slideToggle("slow");
         });
      });
   </script>
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
            <li><a href="#">Music</a></li>
            <li><a href="../../App/Projekti1/sport.php">Sport</a></li>
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
      <h1>MUSIC</h1>
   </div>
   <img class="img1" src="/App/images/maxresdefault.jpg" />
   <article>
      <img src="/App/images/ronanishliu.jpg" title="Rona Nishliu" class="image" id="ronan">
      <div class="description">
         <h1 class="emri">Rona Nishliu </h1>
         <hr class="vija">
         <p class="pershkrimi">K&#235;ng&#235;tarja Rona Nishliu sonte n&#235; mbr&#235;mje do t&#235; jet&#235;
            pjes&#235; e Jazz Radio n&#235; Tirane. Me fillim prej or&#235;s 21:00,
            p&#235;r gjysm&#235; ore Nishliu dhe kuarteti i saj vijn&#235; me nj&#235; minutazh&#235; performancash
            <q>Ke pjeshka</q>.
         </p>
         <hr class="vija">
      </div>
   </article>
   <article>
      <div class="descriptionRight">
         <h1 class="emri">Robin Schulz</h1>
         <hr class="vija">
         <p class="pershkrimi">
            <q>Prishtina Calling</q> &#235;sht&#235; platforma q&#235; do ta sjell n&#235; Prishtine DJ e
            mir&#235;njohur Robin Schulz m&#235; 5 Janar, njofton gazeta Koha Ditore.<br />
            <q>Avalon Production</q> do t&#235; organizoj k&#235;t&#235; koncert i cili do t&#235; jet&#235;
            senzacion p&#235;r publikun e Kosoves dhe m&#235; gj&#235;r&#235;.<br /><br />
            Informatat shtese mund t'i merrni ne cdo pik&#235; t&#235; <q>Prishtina Calling</q>
         </p>
         <hr class="vija">
      </div>
      <img src="/App/images/robinschulz2.jpg" title="Robin Schulz" class="image" style="width:50%">
   </article>
   <article>
      <img src="/App/images/ledrivula.jpg" title="Ledri Vula" class="image">
      <div class="description">
         <h1 class="emri">Ledri Vula</h1>
         <hr class="vija">
         <p class="pershkrimi">Ledri Vula performon p&#235;r her&#235; t&#235; par&#235; k&#235;ng&#235;n e tij t&#235;
            re <q>A jena mire </q>
            n&#235; Zone Club , m&#235; 24.X.2019 nga ora 23:00.
         </p>
         <hr class="vija">
      </div>
   </article>
   <article>
      <div class="descriptionRight" style="width:60%">
         <h1 class="emri">Alban Skenderaj</h1>
         <hr class="vija">
         <p class="pershkrimi">
            K&#235;ng&#235;tari i njohur Alban Sk&#235;nderaj do te performoj k&#235;ng&#235;n e tij <q>Stoli i
               tr&#235;ndafilave</q> , m&#235; daten 12/12/2019, n&#235; Teatrin <q>Oda</q>. <br />
            Muzika dhe teksti jan&#235; realizuar nga vet&#235; k&#235;ng&#235;tari, gjersa k&#235;nga &#235;sht&#235;
            hedhur n&#235; Youtube vet&#235;m n&#235; versionin audio me tekst.
            Edhe k&#235;saj here Albani surprizoi fansat e tij duke sjell&#235; projektin e ri n&#235; heshtje,
            nd&#235;rsa ka trajtuar me delikates&#235; tematik&#235;n e dashuris&#235;.
            Ky projekt pritet t&#235; jet&#235; nj&#235; tjet&#235;r sukses i radh&#235;s p&#235;r k&#235;ng&#235;tarin.
         </p>
         <hr class="vija">
      </div>
      <img src="/App/images/albanskenderaj.jpg" title="Alban Skenderaj" class="image">
   </article>
   <div class="fildiv">
      <img src="/App/images/filharmonia.jpg" class="filimg">
      <h1 class="emri">Filharmonia e Kosoves </h1>
      <p class="multicolumn">Koncerti i Filharmonisë së Kosovës, do të mbahet të dielën me datën 23 nëntor, në sallën e
         Kuqe të pallatit e Rinisë.
         Ky koncert do të ketë për premierë tri veprat të kompozitorëve Kosovar, të Rexho Mulliqit, Zeqirja Ballatës dhe
         të Kreshnik Aliçkaj.
         Dirigjent i këtij koncerti do të jetë, Enco Koço, i cili jeton dhe vepron në Angli.
         Drejtor i Filharmonisë, Baki Jashari, në një konferencë për media tha se ky koncert është mjaft i rëndësishëm
         pasi është edhe
         premierë dhe bënë kultivimin e veprave të kompozitorëve shqiptarë.
         “Është koncert i orkestrës simfonike të filarmonisë së Kosovës, dhe do të thoja menjëherë që veçanti e këtij
         koncerti është
         programi premierë, me tri vepra të kompozitorëve kosovar dhe e gjithë kjo është organizuar edhe në bashkëpunim
         me festivalin
         e Ditët e Muzikës Kosovare, që organizohet nga shoqata e kompozitorëve të Kosovës. Është ky një bashkëpunim
         tashmë disa
         vjeçar dhe se natyrisht që ky bashkëpunim është mjaft i rëndësishëm sepse konsiston edhe me një obligim që ka
         institucioni
         ynë për kultivimin dhe prezanttimin, interpretimin e veprave të kompozitorëve shqiptarë në përgjithësi”, tha
         Jashari.
      </p>
      <br />
   </div>
   <p class="togglep">&Xi;</p>
   <div class="tog tog2 hide">
      <img src="/App/images/ledriaudio.jpg" class="toggleimg">
      <table>
         <tr>
            <th>Artist</th>
            <td>Ledri Vula</td>
         </tr>
         <tr>
            <th>Titulli</th>
            <td>A jena mire</td>
         </tr>
         <tr>
            <th>Albumi</th>
            <td>100 Probleme</td>
         </tr>
         <tr>
            <th>Viti</th>
            <td>2019</td>
         </tr>
         <tr>
            <th></th>
            <td></td>
         </tr>
      </table>
   </div>
   <div class="tog2 hide">
      <img src="/App/images/rona.jpg" class="toggleimg">
      <table>
         <tr>
            <th>Artist</th>
            <td>Rona Nishliu</td>
         </tr>
         <tr>
            <th>Titulli</th>
            <td>Lere Zemren Te Flas</td>
         </tr>
         <tr>
            <th>Albumi</th>
            <td>Suus</td>
         </tr>
         <tr>
            <th>Viti</th>
            <td>2019</td>
         </tr>
         <tr>
            <th></th>
            <td></td>
         </tr>
      </table>
   </div>
   <audio controls class="tog">
      <source src="/App/audio/ledri.mp3" type="audio/mpeg">
   </audio>
   <audio controls>
      <source src="/App/audio/rona.mp3" type="audio/mpeg">
   </audio>
   <div class="top top2">
      <h2>Top 5 k&#235;ng&#235;t shqip</h2>
      <ol>
         <li><a href="https://www.youtube.com/watch?v=Pv9POaq2g_w&list=RDPv9POaq2g_w&start_radio=1">Alban Skenderaj</a>
         </li>
         <li><a href="https://www.youtube.com/watch?v=Y8yTny_XPRU&list=RDPv9POaq2g_w&index=2">Era & Nora</a></li>
         <li><a href="https://www.youtube.com/watch?v=D76nTdQ1A-0&list=RDPv9POaq2g_w&index=4">Ermail Fejzullahu &
               Kida</a></li>
         <li><a href="https://www.youtube.com/watch?v=0nbH6QaFaYY">Enisi - Melodi</a></li>
         <li><a href="https://www.youtube.com/watch?v=kqdjpHYI9rg">Elvana Gjata - Nj&#235;soj</a></li>
      </ol>
   </div>
   <div class="top2">
      <h2>Top 5 k&#235;ng&#235;t e huaja</h2>
      <ul style="list-style-type:disk">
         <li><a href="https://www.youtube.com/watch?v=kO8fTk6oKQg&list=PLaLWNpJCbH_qZlQAqs_pZ1Rh1OMvAO0AU&index=30">DUA
               LIPA</a></li>
         <li><a href="https://www.youtube.com/watch?v=WXBHCQYxwr0&list=PLaLWNpJCbH_qZlQAqs_pZ1Rh1OMvAO0AU&index=34">Ava
               Max</a></li>
         <li><a href="https://www.youtube.com/watch?v=xTlNMmZKwpA&list=PLaLWNpJCbH_qZlQAqs_pZ1Rh1OMvAO0AU&index=42k">Cardi
               B</a></li>
         <li><a href="https://www.youtube.com/watch?v=7_rftpd0u0U&list=PLaLWNpJCbH_qZlQAqs_pZ1Rh1OMvAO0AU&index=63">Ariana
               Grande</a></li>
         <li><a href="https://www.youtube.com/watch?v=XCQK6LmhYqc&list=PLaLWNpJCbH_qZlQAqs_pZ1Rh1OMvAO0AU&index=52">Rita
               Ora</a></li>
      </ul>
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
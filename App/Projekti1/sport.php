<!DOCTYPE html>
<html lang="en">

<?php include('header.php') ?>
<head>
   <link rel="stylesheet" href="../css/sport.css" />
</head>

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

   <?php include('footer.php') ?>

</body>

</html>
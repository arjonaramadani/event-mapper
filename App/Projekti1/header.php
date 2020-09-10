<html>
<head>
<?php 
    // include ('/music.php');
?>
   <meta charset="UTF-8" />
   <title>Event Mapper</title>
   <link rel="stylesheet" href="/css/reset.css">
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
<style>
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
</style>
<body>
<header>
      <h1>Event Mapper</h1>
      <hr />
      <ul>
         <nav>
         <?php if($_SERVER['PHP_SELF'] == '/index.php')
        {
        ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="App/Projekti1/music.php">Music</a></li>
            <li><a href="App/Projekti1/sport.php">Sport</a></li>
            <li><a href="App/Projekti1/ratings.php">Rate us</a></li>
            <li><a href="App/Projekti1/about-us.php">About us</a></li>
            <!-- <li><a href="App/Projekti1/new-post.php">New Post</a></li> -->

            <?php
            if(isset($_COOKIE['user']))
            {
               echo '<li><a href="App/Projekti1/new-post.php">New Post</a></li>';
            }
             ?>
            <!-- <li><a href="new-post.php">New Post</a></li> -->

            <?php
            if(!isset($_COOKIE['user']))
            {
             ?>
            <li class="aboutus" id="logini"><a href="#">Log In</a></li>
            <li class="aboutus"><a href="App/Projekti1/register.php">Register</a></li>
            <?php
            } else {
               ?>
               <li class="aboutus">Hello, <?php echo $_COOKIE['user']  ?></li>
               <li class="aboutus"><a href="App/Projekti1/logout.php">Log out</a></li>

               <?php
                  }   
               ?>
            <!-- <li class="aboutus" id="logini"><a href="#">Log In</a></li> -->
            <!-- <li class="aboutus"><a href="App/Projekti1/register.php">Register</a></li> -->

        <?php
        }else{ ?>
        <li><a href="/index.php">Home</a></li>
            <li><a href="music.php">Music</a></li>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="ratings.php">Rate us</a></li>
            <li><a href="about-us.php">About us</a></li>

            <?php
            if(isset($_COOKIE['user']))
            {
               echo '<li><a href="new-post.php">New Post</a></li>';
            }
             ?>
            <!-- <li><a href="new-post.php">New Post</a></li> -->

            <?php
            if(!isset($_COOKIE['user']))
            {
             ?>
            <li class="aboutus" id="logini"><a href="#">Log In</a></li>
            <li class="aboutus"><a href="register.php">Register</a></li>
            <?php
            } else {
               ?>
               <li class="aboutus">Hello, <?php echo $_COOKIE['user']  ?></li>
               <li class="aboutus"><a href="logout.php">Log out</a></li>


               <?php 
            } 
               ?>

        <?php
         }
         ?>
         </nav>
      </ul>
   </header>
   <div id="login">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] == '/index.php' ? "App/Projekti1/Controllers/Login.php" : "Controllers/Login.php" ?>">
         <pre> Username:           Password:</pre>
         <input type="text" name="username" placeholder="Username">
         <input type="password" name="password" placeholder="Password">
         <button type="submit" >Log in</button>
      </form>
   </div>

</html>
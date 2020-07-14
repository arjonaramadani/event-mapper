<html>
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

   <div>
   <form method="POST" action="Controllers/Register.php">
   <?php include('errors.php'); ?>
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="username"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw_repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="reg_user" class="registerbtn">Register</button>
  </div>

</form>
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
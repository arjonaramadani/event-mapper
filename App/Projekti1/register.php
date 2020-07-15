<html>
<?php include('header.php') ?>
<head>
   <link rel="stylesheet" href="/css/register.css" />
</head>
   <div>
   <form method="POST" action="Controllers/Register.php">
   <?php include('errors.php'); ?>
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="username"><b>Username</b></label>
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
   <?php include('footer.php') ?>

</body>
</html>
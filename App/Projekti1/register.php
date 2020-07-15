<html>
<?php include('header.php') ?>
<head>
   <link rel="stylesheet" href="../css/register.css" />
</head>
<body>
   <div>
   <form method="POST" action="Controllers/Register.php">
   <?php include('errors.php'); ?>
  <div class="container">
    <h1>Regjistrohu</h1>
    <p>Plotesojeni kete forme per tu regjistruar.</p>
   
  
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

   
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>


    <input type="radio" name="role" value="user">User
    <input type="radio" name="role" value="admin">Admin

    <button type="submit" name="reg_user" class="registerbtn">Register</button>
   </div>

   </form>
   </div>
   <?php include('footer.php') ?>

</body>
</html>
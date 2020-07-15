<?php
    include(dirname(__FILE__)."\Connection.php");
    if (isset($_POST)) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $errors = array(); 
      
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    
        // echo $username . "," . $password;
    
        if (count($errors) == 0) {
                // $password = md5($password);
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $results = mysqli_query($conn, $query);
            // echo "\n $query";
            if (mysqli_num_rows($results) == 1) {
                    echo "sucess";
                    setcookie('user', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
              header('location: ../../../index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
      }

 ?>
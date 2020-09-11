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
    
        if (count($errors) == 0) {
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
                $result = mysqli_query($conn, $query);
                $user = mysqli_fetch_assoc($result);
                  
                if (mysqli_num_rows($result) == 1) {
                    print_r($user);
                    setcookie('user', $user['username'], time() + (86400 * 30), "/"); // 86400 = 1 day
                    
                    if ($user['is_admin'] == 1 )
                    {
                        header('location: ../dashboard.php');
                    } else 
                    {
                        header('location: ../../../index.php');
                    }
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
      }

 ?>
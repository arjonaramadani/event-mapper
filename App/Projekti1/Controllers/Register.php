<?php
    include(dirname(__FILE__)."\Connection.php");
    session_start();

    $username = "";
    $name    = "";
    $errors = array(); 

    // print_r($_POST['reg_user']);

    if (isset($_POST)) {
        // receive all input values from the form
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $psw = mysqli_real_escape_string($conn, $_POST['psw']);
        $psw_repeat = mysqli_real_escape_string($conn, $_POST['psw_repeat']);
      
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($name)) { array_push($errors, "Name is required"); }
        if (empty($psw)) { array_push($errors, "Password is required"); }
        if ($psw != $psw_repeat) {
          array_push($errors, "The two passwords do not match");
        }

        $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
          if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
          }
      
          if ($user['name'] === $name) {
            array_push($errors, "name already exists");
          }
        }
      
        // Finally, register user if there are no errors in the form
        // echo "0\n";
        // print_r($username);
        if (count($errors) == 0) {
            echo "1\n";
            $password = md5($psw);//encrypt the password before saving in the database
      
            $query = "INSERT INTO users (username, name, password) 
                      VALUES('$username', '$name', '$psw')";
            mysqli_query($conn, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../../../index.php');
        }
    }
 ?>
<?php
    session_start();

    $errors = array();

    // Connecting to database
    $db = mysqli_connect('localhost', 'root','','shop') or die ("Connection to database could not be established.");

    // Registering Users
    if (isset($_POST['signup'])) {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password1 = mysqli_real_escape_string($db,$_POST['password1']);
        $password2 = mysqli_real_escape_string($db,$_POST['password2']);
        $emailst = mysqli_real_escape_string($db,$_POST['email']);
        // Checking for errors in form
        if(empty($username)){array_push($errors, "Username is required");}
        if(empty($password1)){array_push($errors, "Password is required");}
        if(empty($password2)){array_push($errors, "Please Confirm the Password");}
        if ($password1 != $password2){array_push($errors, "The Passwords do not match");}

        // Making username unique
        $user_check = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $results = mysqli_query($db, $user_check);
        $user = mysqli_fetch_assoc($results);

        if ($user){
            if($user['username'] === $username){array_push($errors, "Username already exits!");}
        }
        if($email){
              if($email['email']==$emailst){array_push($errors,"Email already exists!");}
        }

        // Register the user if there are no errors
        if(count($errors) == 0){
            $password = md5($password1);  //To encrypt the password
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
        
            header('location: Thanku.php');
        }
    }

    // To Log into the website
    if (isset($_POST['signin'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
    
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: home.php');
            }else {
                array_push($errors,"Invalid username/password");
            }
        }
    }
?>
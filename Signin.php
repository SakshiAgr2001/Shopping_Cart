<?php
include('server.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style123.css" type="text/css" media="all" />
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script>
    function validateForm1() {
        var x = document.forms["myForm1"]["username"].value;
        var regex = /^[a-zA-Z ]*$/;
        var y = document.forms["myForm1"]["password"].value;
        if (x == "" || x == null || regex.test(x) == false) {
            alert("Name must be filled only with alphabets");
            return false;
        }
        if (y == "" || y == null) {
            alert("Password must be filled out ");
            return false;
        }
    }
    </script>
</head>

<body>
    <section class="w3l-login-form">
        <div id="form-section">
            <div class="wrapper">
                <div class="logo">
                    <a class="brand-logo" href="home.php">Welcome to FreshKart</a>
                </div>

                <div class="login-form">
                    <form name="myForm1" action="Signin.php" onsubmit="return validateForm1()" method="post" required>
                        <?php 
            include('errors.php'); 
            ?>
                        <div class="form-fields d-grid">
                            <input type="text" name="username" placeholder="username" required="required" />
                            <input type="password" name="password" placeholder="Password" required="required" />
                        </div>
                        <button type="submit" name="signin"> Login</button>

                    </form>

                </div>
                <div class="new-signup ">
                    <a href="#reload " class="signuplink "></a>
                    <p class="signup ">Don’t have account yet? <a href="Signup.php" class="signuplink ">Get it now</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
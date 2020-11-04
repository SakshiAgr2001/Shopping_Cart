<?php 
    include('server.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>Decent Login form Responsive Widget Template : W3Layouts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="login2.css" type="text/css" media="all" />
   
    <script>
        function validateForm2() {

            var y = document.forms["myForm2"]["password1"].value;
            var x = document.forms["myForm2"]["username"].value;
            var z = document.forms["myForm2"]["email"].value;
            var p = document.forms["myForm2"]["password2"].value;
            var nregex = /^[a-zA-Z ]*$/;
            var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var emailcheck = mailformat.test(z);
            if (x == "" || x == null || nregex.test(x) == false) {
                alert("Name must be filled only with alphabets");
                return false;
            }
            if (z == "" || z == null || emailcheck == false) {
                alert("Valid Email must be filled out ");
                return false;
            }
            if (y == "" || p == "") {
                alert("Password must be filled");
                return false;
            }
            if (y !== p) {
                alert("Password is not matching");
                return false;
            }
            if (document.getElementById('checked').checked == false) {
                alert("Checkbox must be filled");
                return false;
            }


        }
    </script>
    
</head>

<body>

    <section class="w3l-login-form">
        <div id="form-section">
            <div class="wrapper">



                <div class="main-w3layouts wrapper">
                    <div class="heading">
                        <h1>CREATE YOUR ACCOUNT NOW!!</h1>
                    </div>

                    <div class="main-agileinfo">
                        <div class="agileits-top">
                            <form name="myForm2"  onsubmit="return validateForm2()" action="Signup.php" method="post">
                            <?php 
            include('errors.php'); 
            ?>

                                <input class="text" type="text" name="username" placeholder="Enter username" required="required" />
                                <input class="text email" type="email" name="email" placeholder="Enter Email" required="">
                                <input class="text" type="password" name="password1" placeholder="Enter Password" required="">
                                <input class="text w3lpass" type="password" name="password2" placeholder=" Enter password again" required="">


                                <div class="wthree-text">
                                    <label class="anim">
                                        <input type="checkbox" id ="checked" class="checkbox" required="">
                                        <span>I Agree To The Terms & Conditions</span>
                                    </label>
                                    <div class="clear"> </div>
                                </div>
                                                         
                                <a href="signin.php"><font color='white' size = '2em'> Already a member? Sign In.</font></a>
                                <button type="submit" name="signup">Sign Up</button>                          

                            </form>

                        </div>
                    </div>
                    <ul class="colorlib-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
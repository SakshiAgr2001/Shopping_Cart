<?php
include('server.php');
?>
<!DOCTYPE html>
<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style123.css" type="text/css" media="all" />
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body>
    <script>
    function Ctrl($scope) {
        $scope.text = 'dshufgu';
    }
    </script>
    <section class="w3l-login-form">
        <div id="form-section">
            <div class="wrapper">
                <div class="logo">
                    <a class="brand-logo" href="home.php">Welcome to FreshKart</a>
                </div>
                <div class="login-form">

                    <form ng-app="myApp" ng-controller="Ctrl" name="myForm" ng-submit="onSubmit()">
                        <?php 
                              include('errors.php'); 
                          ?>
                        <div class="form-fields d-grid">
                            <input type="text" size="50" name="username" ng-pattern="/^[a-zA-Z. ]*[a-zA-Z]{1,60}$/"  required>



                            <input type="password" name="password" ng-model="password" required />

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
    </div>
</body>

</html>
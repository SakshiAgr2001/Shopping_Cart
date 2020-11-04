<?php
include('server.php');
?>

<html>
<head>
<title>Conformation</title>
<link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="thanku.css">
</head>

<body>
    <div class="alert alert-success">
        Thank you for registering with us!
    </div>
    <div class="jumbotron container alert-success">
        <h1 class="display-4">HELLO!</h1>
        <p class="lead"> Thankyou <?php echo $_SESSION['username']?>!! for registering with FRESHKART 
        <p class="lead">Click below to log into your account.</p>
        <a class="btn btn-primary btn-info btn-lg" href="Signin.php" role="button">Log In</a>
    </div>
</body>
</html>
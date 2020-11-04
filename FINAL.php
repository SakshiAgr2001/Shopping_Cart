<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	header('location: Signin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: Signin.php");
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
</head>

<body>

    <!-- Page Preloder -->
   

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="icon.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>

        </div>


        <div class="header__top__right__auth">

        </div>
    </div>

    <div id="mobile-menu-wrap"></div>

    <div class="humberger__menu__contact">

    </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                           <li> <a href="logout.php" class="logout"> <i class="fas fa-sign-out-alt"></i> Logout</a>
                           <li>    <a href = "home.php"> <i class="fas fa-home"></i></a>
                            </ul>
                            <ul>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">


                        <div class="header__top__right__auth">

                            <p>
                                 Here are your order details <i class="fa fa-user"></i>  <?php echo "<b>".$_SESSION['username']."</b>"?>!!
                               

                            </p>
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./home.php"><img src="icon.png" alt=""></a>
                    </div>
                </div>
               
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <div class="col-lg-6">
        <div class="shoping__checkout">
            <h5>ORDER DETAILS</h5>
            <ul>
                <li> ORDER NO <span id="order"><script>
 document.getElementById("order").innerHTML = parseInt(Math.random()*10000000)

</script> </span>
                <li> ARRIVAL DATE <span id="adate"> <script>
var currentDate = new Date()
var day = currentDate.getDate()+1
var month = currentDate.getMonth() + 1
var year = currentDate.getFullYear()

document.getElementById("adate").innerHTML = ("<b>" + day + "/" + month + "/" + year + "</b>")

</script>
</span></li>
            </ul>
            <h3>PAYMENT SUCCESFULLY DONE!!! </h3>
        </div>
         <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>
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
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="store.js" async></script>
</head>
<body>
<div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="icon.png"></a>
        </div>
        <div class="humberger__menu__widget">

            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> </a>
                 <a href="logout.php" class="logout">
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
        </nav>
        <div id="mobile-menu-wrap"></div>

        <div class="humberger__menu__contact">
            <ul>

            </ul>
        </div>
    </div>

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                            <i class="fas fa-sign-out-alt"></i> Logout</a>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">


                        <div class="header__top__right__auth">

                            <p>
                                <i class="fa fa-user"></i> Welcome user  <?php echo "<b>".$_SESSION['username']."</b>"?>!!
                               

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
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>

                        <li><a href="home.php" class="active">Home</a></li>
                        <li><a href="#bottom">Shopping cart</a></li>
                            <li><a href="checkout.php">Checkout </a></li>

                        </ul>
                    </nav>
                </div>

            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                            <div class="cart-row">
                                <tr>
                                    <th class="shoping__product"> <span>Products </span> </th>
                                    <th class="shoping__cart__price">Price</th>
                                    <th class = "shoping__cart__quantity">Quantity</th>
                                                        
                                </tr>
                            </div>
                            </thead>
                            <tbody>
                            <div class="cart-row">
                               </
                             
                        <div class="row">
                     </div>
               
                            <div class="col-lg-6">
                              <div class="shoping__checkout">
                              <h5>Cart Total</h5>
                                                  
                                 Total <span class = "cart-total-price"></span>
                                   <a href="checkout.html" class="primary-btn">PROCEED TO CHECKOUT</a>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
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
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

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> FreshKart </title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="styles.css" />
    <script src="edit1.js" async></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
 

</head>
<body>
<script>
$(document).ready(function(){
    $('.check').click(function() {
        $('.check').not(this).prop('checked', false);
    });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('#chkbtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }
      var name = $('input[name="name"]').val();
if (name.length < 3)
{
    alert('Please enter a name 3 characters or more.');
    return false;
}
var phone = $('input[name="phone"]').val(),
    intRegex = /[0-9 -()+]+$/;
if((phone.length < 6) || (!intRegex.test(phone)))
{
     alert('Please enter a valid phone number.');
     return false;
}

    });
});

</script>

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                            <a href="logout.php" class="logout">     <i class="fas fa-sign-out-alt"></i> Logout</a>

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
                        <li><a href = "#add">Shop</a></li>
                        <li><a href="#bottom"> Cart</a></li>
                         <li><a href="#linkcheckout">Checkout </a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="#">Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><a href="#">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                    <a href = "home.php"> <i class="fas fa-home"></i></a>
                    <i class="fas fa-cart-arrow-down"></i>
                   
                          <a href = "#bottom">view cart</a> <h2> <a id= "add">Product Available</a></h2>
                    </div>
                </div>
            </div>
            <div class="shop-items">
            <div class="shop-item">
                <span class="shop-item-title">Orange</span>
                <img class="shop-item-image" src="img/categories/cat-1.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">$12.99</span>
                    <button class="btn btn-primary shop-item-button" type="button"><i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Bananas</span>
                <img class="shop-item-image" src="img/featured/feature-2.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">$12.99</span>
                   
                    <button class="btn btn-primary shop-item-button" type="button"><i class="fa fa-shopping-cart"></i></button>
                    
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Guavas</span>
                <img class="shop-item-image" src="img/featured/feature-3.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">$12.99</span>
                    <button class="btn btn-primary shop-item-button" type="button"><i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Watermellon</span>
                <img class="shop-item-image" src="img/featured/feature-4.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">$12.99</span>
               
                    <button class="btn btn-primary shop-item-button" type="button"><i class="fa fa-shopping-cart"></i></button>
              
                </div>
            </div>
        </div>    
               
                
        


    </section>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <p>
            <br>
</p>
</section>
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                   <a href = "home.php"> <i class="fas fa-home"></i></a>
                   <i class="far fa-cart-plus"></i> <a href = "#add"> Add Products</a>
                        <h2><a id="bottom"> 
 
                                                Shopping Cart</a></h2>
                        <div class="breadcrumb__option">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <p>
            <br>
</p>
</section>

    <section class="container content-section">
        <h2 class="section-header"><br></h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
      <button onclick = "printcart()" class = "primary-btn"><a href = "#linkcheckout">PROCEED TO CHECKOUT</a></button>

    </section> 
    <section>
        <p>
            <br>
</p>
</section>
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                    <a href = "home.php"> <i class="fas fa-home"></i></a>
                        <h2><a id = "linkcheckout">Checkout</a></h2>
                        <div class="breadcrumb__option">                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>BiLLiNG DETAiLS</h4>
                <form action="FINAL.php" name = "checkform" onsubmit = "return validatecheckout()" method = "post" required>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name = "name" value="<?php echo $_SESSION['username']?>" required = "Please fill this">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text" name = "country" required = "Please fill">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" required = "">
                              </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" placeholder = "City" required="">
                            </div>
                               <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" required = "">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input name = "phone" type="text" required = "">
                                    </div>
                                </div>                                
                            </div>                       
                           
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">                                                              
                                <div class="checkout__order__total">Total <span class ="checkout-cart-total">$0</span></div>
                                <div class="checkout__order__total">Payment method</div>
                              
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                       On delivery
                                        <input type="checkbox" id="payment" class="check">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paytm
                                        <input type="checkbox" id="paypal" class="check">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href = "FINAL.php"><button type = "submit" id = "chkbtn" class="site-btn" onclick = "printcart()">PLACE ORDER</button></a>
                            </div>
                        </div>
                    </div>
                </form>
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
                      
                                         
                           
                  
                           
                
                    
            
                
      
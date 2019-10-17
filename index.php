<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/bootstrap.min.css"/>
    <link rel="stylesheet" href="CSS/animate.css"/>
    <link rel="stylesheet" href="CSS/style1.css"/>
    <link rel="stylesheet" href="CSS/mystylesheet.css"/>
    
</head>
<body>
    <?php include 'headerselection.php';
        $_SESSION["currentPage"]="index.php";
    ?>
    <!--Navigationbar of homepage-->
    <nav class="navbar navbar-expand-md navbar-light bg-white justify-content-end">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav nav-fill ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myorder.php">My Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="cart.php">
                        <ion-icon name="cart" id="cartId"></ion-icon>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <ion-icon name="search" id="searchId"></ion-icon>
                    </a>
                </li>
                <form class="form-inline-block">
                    <input class="form-control" type="search" placeholder="Search">
                </form>
            </ul>            
        </div>
    </nav>
    <!--Carousal slides-->
    <section class="carousel-slides">
        <div id="carouselImg" class="carousel slide" data-ride="carousel" data-interval="4200">
        <!--INDECATORS-->
          <ol class="carousel-indicators">
            <li data-target="#carouselImg" data-slide-to="0" class="active"></li>
            <li data-target="#carouselImg" data-slide-to="1"></li>
          </ol>
          <!--WRAPPER FOR SLIDES-->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Images/slide1.jpg" class="slideImg" alt=""/>
              <div class="carousel-caption">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Extra 70% Off!</h5>
                <p class="animated bounceInLeft text-dark" style="animation-delay: 2s">On New Kit Collection</p>
                <p class="animated bounceInUp" style="animation-delay: 3s"><a href="#">Shop Now</a></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/slide2.jpg" class="slideImg" alt=""/>
              <div class="carousel-caption">
                <h5 class="animated fadeInRight" style="animation-delay: 1s">Extra 20% Off!</h5>
                <p class="animated fadeInLeft" style="animation-delay: 2s">On New Kit Collection</p>
                <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Shop Now</a></p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--Collection section-->
    <section id="collection">
        <h2>Best Collections</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <article class="collection-block">
                        <a href="#"><img class="collection-img" src="Images/man.png"/></a>
                        <h5>Man Collections</h5>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="collection-block">
                        <a href="#"><img class="collection-img" src="Images/woman.jpg"/></a>
                        <h5>Woman Collections</h5>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--Dicount item-->
    <section id="discount-it">
        <img src="Images/highlight.jpg" id="dis-img"/>
        <div id="dis-inner">
            <h5>ALL UPS FOR GRABS!<br/></h5>
            <h2>Enjoy Up To 70% Off</h2>  
            <button type="button" class="btn btn-danger" id="btnShopNow">Shop Now</button>             
        </div>
    </section>
    <!--New arrival products Section-->
    <?php
        include 'newproduct.php';
    ?>        
    <!--Footer Section-->
    <?php
        include "footer.php";
    ?>
    <!----->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_end_flush();?>
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
    $_SESSION["currentPage"]="about.php";
    ?>
    <!--Navigationbar of About US-->
    <nav class="navbar navbar-expand-md navbar-light bg-white justify-content-end">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav nav-fill ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
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
    <!--head background-->
    <section id="headerImg">
        <img src="Images/headbg.jpg"/>
        <div>
            <span id="homeBtnHeader">
                <a href="index.php">HOME</a>
            </span>
            <div>|</div>
            <span class="activeHeader">
                <a href="#">ABOUT US</a>
            </span>
        </div>
    </section>
    <!--about us-->
    <section id="aboutSection">
        <div class="container">
            <div class="row">
                <div class="col-8 c-1">
                    <div>
                        <h1 class="mateBlue animated fadeInRight" style="animation-delay: 1s">Story That Make Us Who We Are</h1>
                    </div>
                    <p class="mateBlue animated fadeInLeft" style="animation-delay: 2s">
                        <?php
                            $result=getAboutInfo($conn);
                            $row = mysqli_fetch_array($result);
                            echo  $row["about_us"];
                        ?>
                    </p>
                    <p class="mateBlue animated fadeInLeft" style="animation-delay: 3s">
                        <?php
                            echo  $row["our_service"];
                        ?>
                    </p>
                </div>
                <div class="col-4">
                    <iframe width="100%" height="420" 
                    src="https://www.youtube.com/embed/wYnS-iwpjFQ" frameborder="0" allow="accelerometer; autoplay; 
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                </div>
            </div>
            <!--our services 2nd row-->
            <div class="row serviceRow">
                <div class="col-md-4">
                    <img src="Images/percent.png" class="service"/>
                    <h5 class="mateBlue">100% Original</h5>
                    <p class="mateBlue">
                        <?php
                            echo $row["speciality_1"];
                        ?>
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="Images/delivery.png" class="service"/>
                    <h5 class="mateBlue">Wide Delivery</h5>
                    <p class="mateBlue">
                        <?php
                            echo $row["speciality_2"];
                        ?>
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="Images/payment.png" class="service"/>
                    <h5 class="mateBlue">Secure Payment</h5>
                    <p class="mateBlue">
                        <?php
                            echo $row["speciality_3"];
                        ?>
                    </p>
                </div>
            </div>
            
        </div>
    </section>

    <!--Footer Section-->
    <?php
        include "footer.php";
    ?>
    <!---->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
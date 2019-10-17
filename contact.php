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
    <!--log in section for register and login-->
    <?php include 'headerselection.php';
    $_SESSION["currentPage"]="contact.php";
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
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myorder.php">My Orders</a>
                </li>
                <li class="nav-item active">
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
                <a href="#">CONTACT US</a>
            </span>
        </div>
    </section>
    <!--Contact Us Section-->
    <section id="contactSection" class="container">
        <h3 class="mateBlue">Contact Us</h3>
        <P class="mateBlue">If you would prefer to discuss in personal.Please include the necessary details in your message</br>
            & we will get back to you as soon as possible.
        </P>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row formRow">
                <div class="col">
                    <label>Name</label>
                    <input type="text" class="form-control mateBlue" name="cName" placeholder="Enter Your Name">
                </div>
                <div class="col">
                    <label>Email</label>
                    <input type="email" class="form-control mateBlue" id="" name="cEmail" placeholder="Enter Mail Address">
                </div>
            </div>
            <div class="row formRow">
                <div class="col">
                    <label>Phone</label>
                    <input type="text" class="form-control mateBlue" name="cPhone" placeholder="Enter Mobile Number">
                </div>
                <div class="col">
                    <label>Subject</label>
                    <input type="text" class="form-control mateBlue" id="" name="cSubject" placeholder="Enter Your Subject">
                </div>
            </div>
            <div class="row formRow">
                <div class="col form-group">
                    <label>Message</label>
                    <textarea name="cMessage" placeholder="Enter Your Message" class="form-control mateBlue" rows="5"></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <input type="submit" class="btn btn-danger" name="contactSubmit" id="submitBtn" value="Submit"/>
            </div>
        </form>
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
<?php
    if(isset($_POST["contactSubmit"]))
    {
        if(!empty($_POST["cName"]) && !empty($_POST["cEmail"]) && (strlen($_POST["cPhone"])==11) && !empty($_POST["cSubject"]) && !empty($_POST["cMessage"]))
        {
            $result=insertContact($conn,$_POST["cName"],$_POST["cEmail"],$_POST["cPhone"],$_POST["cSubject"],$_POST["cMessage"]);
        }
    }
?>
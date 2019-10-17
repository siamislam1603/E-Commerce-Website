<section id="logSection">
    <div class="container">
        <div class="row">
            <div id="contactNo" class="col-sm-10">
                <ion-icon name="call" style="color: white;vertical-align: -webkit-baseline-middle;"></ion-icon>
                <span style="vertical-align: -webkit-baseline-middle;">+8801600118763 / 7 days a week from 9 am to 7pm.</span>
            </div>
            
            <nav class="navbar navbar-expand-sm bg-danger navbar-light">
    
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle p-0" id="navbardrop" data-toggle="dropdown">
                        <?php
                        $result=getUserCurrentInfo($conn,$_SESSION["userId"]); 
                        $row = mysqli_fetch_array($result);
                        echo $row["user_name"];?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="userprofile.php">User Profile</a>
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </div>
                    </li>
                    </ul>
                </nav>
                
            
        </div>  
    </div>
</section>
<!--logo of website-->
<div class="container">
    <div class="row">
        <div class="col-sm-10" id="logo" style="background: url(Images/logo.jpg)"></div>
    </div>
</div>
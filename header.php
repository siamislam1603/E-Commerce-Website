
<!--log in section for register and login-->

<section id="logSection">
    <div class="container">
        <div class="row">
            <div id="contactNo" class="col-sm-10">
                <ion-icon name="call" style="color: white"></ion-icon>
                <span>+8801600118763 / 7 days a week from 9 am to 7pm.</span>
            </div>
            <div id="signUp" class="col-sm-2">
                <a href="#" data-toggle="modal" data-target="#loginModal">LOGIN</a>
                <span>|</span>
                <a href="#" data-toggle="modal" data-target="#registerModal">REGISTER</a>
            </div>
        </div>  
    </div>
</section>
<!--Login Modal-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="loginModalLabel">Login Here</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post" enctype="multipart/form-data">
                    <p class="text-danger">User Name</p>
                    <input type="text" name="userName" placeholder="Enter User Name">
                    <p class="text-danger">Password :</p>
                    <input type="password" name="userPass" placeholder="Enter Password">
                    <input type="submit" name="" value="Login">
                    <a href="#" data-toggle="modal" data-target="#forgetPassModal">Forget Password?</a><br>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Register Modal-->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="registerModalLabel">Register Here</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <p class="text-danger">User Name</p>
                    <input type="text" name="rUserName" placeholder="Enter User Name">
                    <p class="text-danger">Email</p>
                    <input type="email" name="rUserEmail" placeholder="Enter Your Email">
                    <p class="text-danger">Password :</p>
                    <input type="password" name="rUserPass" placeholder="Enter Password">
                    <p class="text-danger">Repeat Password :</p>
                    <input type="password" name="rRepeatPass" placeholder="Repeat Password">
                    <input type="submit" name="" value="Register">
                </form>
            </div>
        </div>
    </div>
</div>
<!--Forget Password Modal-->
<div class="modal fade" id="forgetPassModal" tabindex="-1" role="dialog" aria-labelledby="forgetPassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="forgetPassModalLabel">Recover Account</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <p class="text-danger">User Name</p>
                    <input type="text" name="" placeholder="Enter User Name">
                    <p class="text-danger">Email</p>
                    <input type="email" name="" placeholder="Enter Your Email">
                    <input type="submit" name="" value="Recover">
                </form>
            </div>
        </div>
    </div>
</div>
<!--logo of website-->
<div class="container">
    <div class="row">
        <div class="col-sm-10" id="logo" style="background: url(Images/logo.jpg)"></div>
    </div>
</div>
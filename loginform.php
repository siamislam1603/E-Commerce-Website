<div class="container">
    <div class="row formRow">
        <div class="col-md-6">
            <article class="m-0 p-5" style="box-shadow: 2px 2px 6px rgba(0,0,0,0.3);">
                <h2 class="mb-4 mateBlue">Login</h2>
                <form action="login.php" method="post" enctype="multipart/form-data">
                    <label>User Name</label>
                    <input type="text" class="form-control mateBlue" name="userName" placeholder="Enter User Name">
                    <label class="mt-4">User Password</label>
                    <input type="password" class="form-control mateBlue" name="userPass" placeholder="Enter Password">
                    <div class="row justify-content-center">
                        <input type="submit" class="btn btn-danger m-4" name="" value="Login">
                    </div>
                </form>
            </article>
        </div>
        <div class="col-md-6">
            <article class="m-0 p-5" style="box-shadow: 2px 2px 6px rgba(0,0,0,0.3);">
                <h2 class="mb-4 mateBlue">Register</h2>
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <label>User Name</label>
                    <input type="text" class="form-control mateBlue" name="rUserName" placeholder="Enter User Name">
                    <label class="mt-4">User Email</label>
                    <input type="email" class="form-control mateBlue" name="rUserEmail" placeholder="Enter Email">
                    <label class="mt-4">Password</label>
                    <input type="password" class="form-control mateBlue" name="rUserPass" placeholder="Enter Password">
                    <label class="mt-4">Repeat Password</label>
                    <input type="password" class="form-control mateBlue" name="rRepeatPass" placeholder="Retype Password">
                    <div class="row justify-content-center">
                        <input type="submit" class="btn btn-danger m-4" name="" value="Register">
                    </div>
                </form>
            </article>
        </div>
    </div>
</div>
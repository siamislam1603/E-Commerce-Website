<?php
$result=getUserCurrentInfo($conn,$_SESSION["userId"]);
$row = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="d-flex justify-content-center">
        <article class="m-0 p-5" style="box-shadow: 2px 2px 6px rgba(0,0,0,0.3);">
            <h2 class="mb-4 mateBlue">Edit User Profile</h2>
            <form action="changeUserProfile.php" method="post" enctype="multipart/form-data">
                <label>User Name</label>
                <input type="text" class="form-control mateBlue" name="nUserName" placeholder="Enter User Name" 
                <?php
                echo " value='".$row["user_name"]."'";
                ?>
                >
                <label class="mt-4">User Email</label>
                <input type="email" class="form-control mateBlue" name="nUserEmail" placeholder="Enter Email" 
                <?php
                echo " value='".$row["user_email"]."'";
                ?>
                >
                <div class="row justify-content-center">
                    <input type="submit" class="btn btn-danger m-4" name="updateProfileBtn" value="Update Profile">
                </div>
            </form>
        </article>
    </div>
</div>

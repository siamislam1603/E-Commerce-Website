<!--1st row-->
<?php
    
?>
<div class="row">
    <div class="col-md-6">
        <article class="nProduct-block">
        <?php
            echo "<img class='collection-img product-details-img' onmouseover=src='".$row["product_nimg"]."'".
                    " onmouseout=src='".$row["product_img"]."'"." src='".$row["product_img"]."'"."/>";
        ?>
        </article>
    </div>
    <div class="col-md-6">
        <div>
        <?php
            echo "<h3>".$row["product_name"]."</h3>
            <h5>Brand Name</h5>";?>
            <div class="mt-4">
                <span class="text-danger mr-3 h3"><?php echo $row["product_price"]."TK";?></span>
                <a href="#"><ion-icon name="heart"></ion-icon></a>
                <a href="#"><ion-icon name="cart"></ion-icon></a>
            </div>
            <div class="seperatorRed"></div>
            <form <?php
                        $result=checkCartItem($conn,$_SESSION["userId"],$_GET["pid"]);
                        $noOfData=mysqli_num_rows($result);
                        $row = mysqli_fetch_array($result);
                        if($noOfData>0){
                            echo "action='updatecart.php?cid=".$row["cart_id"]."'";
                        }
                        else{
                            echo "action='addtocart.php?pid=".$_GET["pid"]."'";
                        }
                        ?>
                        method="post" enctype="multipart/form-data">
                <div class="row formRow">
                    <div class="col-4">
                    <input type="number" class="form-control bg-dark text-light" name="cartQuantity" <?php
                        $result=getCartOfSingleProduct($conn,$_SESSION["userId"],$_GET["pid"]);
                        $noOfData=mysqli_num_rows($result);
                        $row = mysqli_fetch_array($result);
                        if($noOfData>0){
                            echo "value='".$row["quantity"]."'";
                        }
                        else{
                            echo "value='1'";
                        }
                    ?>
                    >
                    </div>
                    <div class="col-6">
                        <input type="submit" class="btn btn-danger" id="addtoCart" name="cartBtn" <?php
                        $result=checkCartItem($conn,$_SESSION["userId"],$_GET["pid"]);
                        $noOfData=mysqli_num_rows($result);
                        if($noOfData>0){
                            echo "value='UPDATE CART'";
                        }
                        else{
                            echo "value='ADD TO CART'";
                        }
                        ?>/>
                    </div>
                </div>
            </form>
            <p class="mateBlue">
                Fashion has always been so temporary & uncertain.You can't keep up with it. 
            </p>
            <p>
                Tags:de Finibus Bonorum et Malorum
            </p>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-12">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-description-tab" data-toggle="tab" href="#product-description" role="tab" aria-controls="product-description" aria-selected="true">Description</a>
                <a class="nav-item nav-link" id="product-information-tab" data-toggle="tab" href="#product-information" role="tab" aria-controls="product-information" aria-selected="false">Additional Information</a>
            </div>
        </nav>
    </div>
    <div class="tab-content col-12" id="nav-tabContent">
        <div class="tab-pane fade show active" id="product-description" role="tabpanel" aria-labelledby="product-description-tab">
            <p class="mateBlue my-3"><?php
            $result=productDetails($conn,$_GET["pid"]);
            $row = mysqli_fetch_array($result);
            echo $row["product_description"];?></p>
        </div>
        <div class="tab-pane fade" id="product-information" role="tabpanel" aria-labelledby="product-information-tab">
            <div class="my-4">
                <ul>
                    <li class="mateBlue">standard, non-adherent cut</li>
                </ul>
                <ul>
                    <li class="mateBlue">sublimation graphics inspired by lightning strikes</li>
                </ul>
                <ul>
                    <li class="mateBlue">silky, comfortable material</li>
                </ul>
                <ul>
                    <li class="mateBlue">embroidered manufacturer's logo</li>
                </ul>
                <ul>
                    <li class="mateBlue">pressed club badge made of flexible polymer</li>
                </ul>
            </div>
        </div>
    </div>
</div>

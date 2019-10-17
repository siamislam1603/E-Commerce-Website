<?php
    if(!empty($_GET["lpid"])){
        $result=getNextAllProducts($conn,$_GET["lpid"]);
        $noOfData=mysqli_num_rows($result);
        if($noOfData>=1){
            $lastProductId=$_GET["lpid"]+1;
        }
        else{
            $result=getAllProducts($conn);
            $lastProductId=0;
        }
    }
    else{
        $result=getAllProducts($conn);
        $lastProductId=0;
    }
    $i=1;
    while($row = mysqli_fetch_array($result)){
        if($i==1 || $i==3){
            echo "<div class='row'>";
        }
        echo "<div class='col-md-6'>
            <article class='nProduct-block'>
                <a href='product.php?pid=".$row["product_id"]."'>
                    <img class='collection-img' onmouseover=src='".$row["product_nimg"]."'".
                    " onmouseout=src='".$row["product_img"]."'"." src='".$row["product_img"]."'"."/>    
                </a>
                <div>
                    <h5>".$row["product_name"]."</h5>
                    <div class='iconsProduct'>
                        <a href='#'><ion-icon name='heart'></ion-icon></a>
                        <a href='#'><ion-icon name='cart'></ion-icon></a>
                    </div>
                </div>
                <h2>".$row["product_price"]."TK</h2>
            </article>
        </div>";
        if($i%2==0){
            echo "</div>";
        }
        $i++;
        $lastProductId=$row["product_id"];
    }
?>
<!--Pagination Section-->
<form action="" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
        <input type="submit" name="showMore" class="btn btn-danger" id="showMoreBtn" value="Show More"/>
    </div>
</form>
<?php
    if(isset($_POST["showMore"])){
        header("location:product.php?lpid=".$lastProductId);
    }
?>
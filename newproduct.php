<section id="nAPro">
    <h2>New Arrivals Products</h2>
    <div class="container">
        
        <?php
        if(!empty($_GET["lpid"])){
            $result=getNextNewProduct($conn,$_GET["lpid"]);
            $noOfData=mysqli_num_rows($result);
            if($noOfData>=1){
                $lastProductId=$_GET["lpid"]+1;
            }
            else{
                $result=getNewProduct($conn);
                $lastProductId=0;
            }
        }
        else{
            $result=getNewProduct($conn);
            $lastProductId=0;
        }
        $i=1;
        if($result){
        while($row = mysqli_fetch_array($result)){
            if($i==1 || $i==4 ||$i==7){
                echo "<div class='row'>";
            }
            echo "<div class='col-md-4'>
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
            if($i%3==0){
                echo "</div>";
            }
            $i++;
            $lastProductId=$row["product_id"];
        }
    }
        ?>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <input type="submit" name="showMore" class="btn btn-danger" id="showMoreBtn" value="Show More"/>
        </div>
    </form>
</section>
<?php
    if(isset($_POST["showMore"])){
        header("location:index.php?lpid=".$lastProductId);
    }
?>

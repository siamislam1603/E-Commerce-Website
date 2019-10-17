<!--Cart Section-->
<section class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>My Shopping Bag(<?php 
            $result=totalItemOfCart($conn,$_SESSION["userId"]);
            $row = mysqli_fetch_array($result);
            echo $row[0];
            ?> item)</h3>
            <div class="row my-3">
                <div class="col-5">
                    <span>Product</span>
                </div> 
                <div class="col-1">
                    <span>Price</span>
                </div>
                <div class="col-3">
                    <span>Quantity</span>
                </div>
                <div class="col-3">
                    <span>Total</span>
                </div>  
            </div>
            
            <?php
            $sum=0;
            $result=getAllCartProducts($conn,$_SESSION["userId"]);
            while($row = mysqli_fetch_array($result)){
                $sum+=$row["product_price"]*$row["quantity"];
                echo "<div class='row cart-rows mb-3'>
                <div class='col-5'>
                    <form class='form-inline remove-cart' action='removefromcart.php?cid=".$row["cart_id"]."' method='post' enctype='multipart/form-data'>
                    <input type='submit' name='removeCart' class='form-control mateBlue font-weight-bold removeBtn' value='x'/>
                    </form>
                    <article class='cart-img-block'>
                        <img class='cart-img' id='img-1' src='".$row["product_img"]."'/>
                    </article>
                    <span class='mateBlue'>".$row["product_name"]."</span>
                </div>
                <div class='col-1'>
                    <span class='mateBlue'>".$row["product_price"]."</span>
                </div>
                <div class='col-3'>
                    <form action='updatecart.php?cid=".$row["cart_id"]."' class='form-inline' method='post' enctype='multipart/form-data'>
                    <input type='number' name='quantity' class='form-control bg-dark text-light w-75' value='".$row["quantity"]."'>
                    <input type='submit' name='updateCart' class='form-control font-weight-bold removeBtn text-danger' value='U'/>
                    </form>
                </div>
                <div class='col-3'>
                    <span class='mateBlue'>".$row["product_price"]*$row["quantity"]."TK</span>
                </div>
            </div>
            <div class='seperatorCart'></div>";
            } 
            ?>
            
        </div>
        <div class="col-md-2">
            <h3 class="mateBlue">Cart Totals</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Sub Total</th>
                    <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $result=getAllCartProducts($conn,$_SESSION["userId"]);
                    $i=ceil(mysqli_num_rows($result)/2);
                    $j=1;
                    while($row = mysqli_fetch_array($result)){
                        if($j==$i){
                            echo "<tr>
                                <td>".$row["product_price"]*$row["quantity"]."TK</td>
                                <td class='text-danger font-weight-bold'>".$sum."TK</td>
                            </tr>";
                        }else{
                        echo "<tr>
                                <td>".$row["product_price"]*$row["quantity"]."TK</td>
                            </tr>";
                        }
                        $j++;
                    }
                ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <!---->
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
            <?php
            if(mysqli_num_rows($result)>0){
                echo "<form action='order.php' method='post' enctype='multipart/form-data'>
                <input type='submit' class='btn btn-danger' name='proceedToCheckOut' value='PROCEED TO CHECKOUT'/>
                </form>";
            }
            ?>
            
        </div>
    </div>
    <!---->
</section>

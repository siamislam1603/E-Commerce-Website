<!--Chceckout section-->
<div class="container">
    <div class="row">

        <div class="col-md-6">
            <h3 class="mateBlue">Billing Details</h3>
            <form action="placeorder.php" method="post" enctype="multipart/form-data">
                <div class="row formRow">
                    <div class="col">
                        <label>Phone</label>
                        <input type="text" class="form-control mateBlue" name="phoneNo" placeholder="Enter Your Phone No.">
                    </div>
                </div>
                <div class="row formRow">
                    <div class="col form-group">
                        <label>Address</label>
                        <input type="text" class="form-control mateBlue" name="address" placeholder="Enter Your Address">
                    </div>
                </div>
                <div class="row formRow">
                    <div class="col">
                        <label>City</label>
                        <input type="text" class="form-control mateBlue" name="city" placeholder="Enter Your City">
                    </div>
                    <div class="col">
                        <label>Post Code</label>
                        <input type="number" class="form-control mateBlue" name="postCode" placeholder="Enter Your Area Post Code">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                        if(!empty($_GET["message"])){
                            echo "<div class='text-success font-weight-bold'></div>";
                        }
                        else{
                            echo "<input type='submit' class='btn btn-danger' name='placeOrderBtn' value='Place Order'/>";
                        }
                        unset($_GET["message"]);
                    ?>
                    
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h3 class="mateBlue">Your Order</h3>
            <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $result=getAllCartProducts($conn,$_SESSION["userId"]);
                    $sum=0;
                    while($row = mysqli_fetch_array($result)){
                        $sum+=$row["product_price"]*$row["quantity"];
                        echo "<tr>
                        <th scope='row'>".$row["product_name"]." x ".$row["quantity"]."</th>
                        <td class='mateBlue table-warning'>".$row["product_price"]." x ".$row["quantity"]." = ".$row["product_price"]*$row["quantity"]."
                        TK</td>
                        </tr>";
                    }
                
                echo "<tr>
                <th scope='row'>Total</th>
                <td class='mateBlue text-danger font-weight-bold'>".$sum."TK</td>
                </tr>";
                ?>
            </tbody>
            </table>
        </div>

    </div>
</div>
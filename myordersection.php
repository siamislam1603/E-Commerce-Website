<div class="container">
<div class="row justify-content-center">
    <h3 class="mateBlue font-weight-bold">ORDER LIST</h3>
    <table class="table table-bordered">
        <thead>
            <tr class="table-warning">
            <th scope="col">Product</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $sql='SELECT * FROM cart WHERE user_id='.$_SESSION["userId"];
            $result=mysqli_query($conn,$sql);
            if(!$result){
            $result=getOrderList($conn,$_SESSION["userId"]);
            $sum=0;
            $i=1;
            $color="table-light";
            if(mysqli_num_rows($result)!=0 && $result){
            $noOfData = mysqli_num_rows($result);
            while($row = mysqli_fetch_array($result)){
                $sum+=$row["product_price"]*$row["quantity"];
                echo "<tr class='".$color."'>
                <th scope='row'>".$row["product_name"]." x ".$row["quantity"]."</th>
                <td class='mateBlue'>".$row["product_price"]." x ".$row["quantity"]." = ".$row["product_price"]*$row["quantity"]."
                TK</td>
                </tr>";
                if($i==$noOfData){
                    if($color=="table-warning")
                    $color="table-light";
                    else
                    $color="table-warning";

                    echo "<tr class='".$color."'> 
                    <th scope='row'>Total</th>
                    <td class='mateBlue text-danger font-weight-bold' colspan='2'>".$sum."TK</td>
                    </tr>";
                }
                if($color=="table-warning")
                $color="table-light";
                else
                $color="table-warning";
                $i++;
            }
        }
    }
        ?>
    </tbody>
    </table>
</div>
</div>
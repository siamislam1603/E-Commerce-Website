<section id="productSection" class="container mt-5">
    <div class="row">
        <!--Filter Container-->
        <div class="col-md-4 productFilter">
            <div class="input-group md-form form-sm form-2 my-4">
                <input class="form-control bg-dark text-light" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <span class="input-group-text bg-dark" id="basic-text1"><a id="productSearch" href="#">
                    <ion-icon name="search" id="productSearchId"></ion-icon>
                    </a></span>
                </div>
            </div>
            <div class="seperatorRed"></div>
            <div id="categoryFilter">
                <h5>Categories</h5>
                <div class="my-4">
                    <ul>
                        <li><a href="#" class="footer-links">Boots</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" class="footer-links">Men Jerseys</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" class="footer-links">Women Jerseys</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" class="footer-links">Half Sleeve</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" class="footer-links">Full Sleeve</a></li>
                    </ul>
                </div>
                <div class="seperatorRed"></div>
                <div id="filterByPrice" class="my-4">
                    <h5>Filter By Price</h5>
                    <div><span class="mx-2 text-light">Between:</span>
                        <select name="Price" class="sm-input">
                            <option value="">Price:</option>
                            <option value="100">100</option>
                        </select>
                        <span class="mx-2 ml-5 text-light">And:</span>
                        <select name="Price" class="sm-input">
                            <option value="">Price:</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <div class="seperatorRed"></div>
                <div id="recentProducts" class="my-4">
                    <h5>Recent Products</h5>
                    <div style="background: url(ImageS/nimg-1.jpg)" class="footer-pro">
                        <section>
                            <div class="footer-proName text-light">
                                Real FC!
                            </div>
                            <div class="footer-proPrice">
                                450Tk
                            </div>
                        </section>
                    </div>
                    <div style="background: url(ImageS/nimg-8.jpg)" class="footer-pro">
                        <section>
                            <div class="footer-proName text-light">
                                PSG
                            </div>
                            <div class="footer-proPrice">
                                450Tk
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!--Products container-->       
        <div class="col-md-8">
            <?php
            if(!empty($_GET["pid"])){
                $result=productDetails($conn,$_GET["pid"]);
                $row = mysqli_fetch_array($result);
                $noOfData = mysqli_num_rows($result);
                if($noOfData!=0)
                    include "productdetails.php";
                else
                    echo '<script type="text/JavaScript">  
                    alert("Not Available"); 
                    </script>';
                    
            }
            else
                include "allproduct.php";
            ?>
            
        </div>
    </div>
</section>

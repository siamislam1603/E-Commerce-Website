<?php
    $userTable="user";
    function createConnection(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'ecommerce';
        $conn = mysqli_connect($host, $user, $password, $db);
        return $conn;
    }
    function insertUser($conn,$user_name,$user_email,$user_pass){
        $sqlInsert = 'INSERT INTO user (user_name, user_email, user_pass) VALUES ("'.$user_name.'","'.$user_email.'","'
        .$user_pass.'")';
        $resultInsert = mysqli_query($conn, $sqlInsert);
        return $resultInsert;
    }
    function getUserInfo($conn,$user_name,$user_pass){
        $sql = 'SELECT * FROM user WHERE user_name="'.$user_name.'" AND user_pass= "'.$user_pass.'"';
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    function getNewProduct($conn){
        $sql='SELECT * FROM product WHERE date IN(SELECT * FROM (SELECT DISTINCT(date) FROM product ORDER BY date DESC LIMIT 3)temp_tab) LIMIT 9';
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    function getAllProducts($conn){
        $sql='SELECT * FROM product LIMIT 4';
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    function productDetails($conn,$product_id){
        $sql='SELECT * FROM product WHERE product_id='.$product_id;
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    function getNextNewProduct($conn,$product_id){
        $sql='SELECT * FROM product WHERE product_id > '.$product_id.' AND date IN(SELECT * FROM (SELECT DISTINCT(date) FROM product ORDER BY date DESC LIMIT 3)temp_tab) LIMIT 9';
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    function getAboutInfo($conn){
        $sql='SELECT * FROM about ORDER BY about_id DESC LIMIT 1';
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    function insertContact($conn,$name,$email,$phone,$subject,$message){
        $sqlInsert = 'INSERT INTO contact (name, email, phone, subject, message) VALUES ("'.$name.'","'.$email.'","'
        .$phone.'","'.$subject.'","'.$message.'")';
        $resultInsert = mysqli_query($conn, $sqlInsert);
        return $resultInsert;
    }
    function getTotalProducts($conn){
        $sql='SELECT COUNT(product_id) FROM product';
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function getLastProductIdOfPage($conn){
        $sql='SELECT product_id FROM product where product_id IN (select product_id from(SELECT * FROM product LIMIT 4)temp_tab) ORDER BY product_id DESC LIMIT 1';
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function  getNextAllProducts($conn,$product_id){
        $sql='SELECT * FROM product WHERE product_id > '.$product_id.' LIMIT 4';
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function insertToCart($conn,$quantity,$user_id,$product_id){
        $sqlInsert = 'INSERT INTO cart (quantity, user_id, product_id) VALUES ('.$quantity.",".$user_id.",".$product_id.')';
        $resultInsert = mysqli_query($conn, $sqlInsert);
        $lastInsertID = mysqli_insert_id($conn);
        $sql='INSERT INTO orderedproduct (quantity, user_id, product_id, cart_id) VALUES ('.$quantity.",".$user_id.",".$product_id.",".$lastInsertID.')';
        $result=mysqli_query($conn, $sql);
        return $resultInsert;
    }
    function checkCartItem($conn,$user_id,$product_id){
        $sql='SELECT * FROM cart WHERE user_id = '.$user_id.' AND product_id = '.$product_id;
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function totalItemOfCart($conn,$user_id){
        $sql='SELECT COUNT(DISTINCT(product_id)) FROM cart where user_id='.$user_id;
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function getAllCartProducts($conn,$user_id){
        $sql='SELECT product.product_id,product_name,product_img,product_price,cart.quantity,cart_id FROM product,cart WHERE product.product_id=cart.product_id AND user_id='.$user_id;
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function removeFromCart($conn,$cart_id){
        $sql='DELETE FROM cart WHERE cart_id='.$cart_id;
        $result=mysqli_query($conn,$sql);
        $sqlDelete='DELETE FROM orderedproduct WHERE cart_id='.$cart_id;
        $resultset=mysqli_query($conn,$sqlDelete);
        return $result;
    }
    function getCartOfSingleProduct($conn,$user_id,$product_id){
        $sql='SELECT * FROM cart WHERE user_id = '.$user_id.' AND product_id = '.$product_id;
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function updateCart($conn,$cart_id,$quantity){
        $sql='UPDATE cart SET quantity='.$quantity.' WHERE cart_id='.$cart_id;
        $result=mysqli_query($conn,$sql);
        $sqlUpdate='UPDATE orderedproduct SET quantity='.$quantity.' WHERE cart_id='.$cart_id;
        $resultset=mysqli_query($conn,$sqlUpdate);
        return $result;
    }
    function insertOrder($conn,$user_phone,$user_address,$user_city,$user_id,$user_postcode){
        $sqlInsert = 'INSERT INTO orders (user_phone, user_address, user_city, user_id, user_postcode) VALUES ("'.$user_phone.'","'.$user_address.
        '","'.$user_city.'",'.$user_id.",".$user_postcode.')';
        $result=mysqli_query($conn,$sqlInsert);
        return $result;
    }
    function deleteFromCart($conn,$user_id){
        $sql='DELETE FROM cart WHERE cart.user_id='.$user_id;
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function getOrderList($conn,$user_id){
        $sql='SELECT product_name,product_price,orderedproduct.quantity FROM product,orderedproduct WHERE product.product_id=orderedproduct.product_id AND orderedproduct.user_id='.$user_id;
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function getUserCurrentInfo($conn,$user_id){
        $sql='SELECT * FROM user WHERE user_id='.$user_id;
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    function updateProfile($conn,$user_id,$user_name,$user_email){
        $sql='UPDATE user SET user_name="'.$user_name.'", user_email= "'.$user_email.'"WHERE user_id='.$user_id;
        $result=mysqli_query($conn,$sql);
        return $result;
    }
?>
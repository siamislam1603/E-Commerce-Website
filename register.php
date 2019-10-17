<?php
    session_start();
    $userTable="user";
    include 'databasehandle.php';
    $conn=createConnection();
    if(!empty($_POST["rUserName"]) && !empty($_POST["rUserEmail"]) && !empty($_POST["rUserPass"]) && !empty($_POST["rRepeatPass"])){
        $sql = 'SELECT user_name,user_email FROM user WHERE user_email="'.$_POST["rUserEmail"].'"OR user_name="'.$_POST["rUserName"].'"';
        $result = mysqli_query($conn, $sql);
        $noOfData = mysqli_num_rows($result);
        if(strcmp($_POST["rUserPass"],$_POST["rRepeatPass"])==0 && $noOfData==0)
        {
            $result=insertUser($conn,$_POST["rUserName"],$_POST["rUserEmail"],md5($_POST["rUserPass"]));
            $lastInsertID = mysqli_insert_id($conn);
            $_SESSION["userName"]=$_POST["rUserName"];
            $_SESSION["userId"]=$lastInsertID;
            if($result)
            header("location:".$_SESSION["currentPage"]);
            exit;
        }
        else{
            header("location:".$_SESSION["currentPage"]."?message=Invalid User Name Or Email");
            exit;
        }
    }
    else{
        unset($_GET["message"]);
        header("location:".$_SESSION["currentPage"]);
        exit;
    }
?>
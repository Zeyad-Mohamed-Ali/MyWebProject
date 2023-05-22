<?php
session_start();
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['phone'])){
    $NAME=$_POST['name'];
    $EMAIL=$_POST['email'];
    $password=$_POST['password'];
    $PHONE=$_POST['phone'];
    $con=new mysqli("localhost","root","","online_programming");
    
    if($con->connect_error){die("connection failed!!! :".$con->connect_error);}
    $sql = "INSERT INTO student  (name,email,password,phone_number) VALUES ('$NAME','$EMAIL','$password','$PHONE')";

    $result=mysqli_query($con, $sql);
    if (!$result) {
        die("Query failed: " . mysqli_error($mysqli));
    }
    
    $_SESSION['logged_in']=true;
    header("location:index.php");
    exit();
}
?>
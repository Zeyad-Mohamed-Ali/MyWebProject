<?php
session_start();
if(isset($_POST['email'])&&isset($_POST['password'])){
    $password=$_POST['password'];
    $con=new mysqli("localhost","root","","online_programming");
    
    if($con->connect_error){die("connection failed!!! :".$con->connect_error);}
    $sql = "SELECT * FROM student WHERE password = '{$password}'";

    $result=mysqli_query($con, $sql);
    if (!$result) {
        die("Query failed: " . mysqli_error($mysqli));
    }
    
    $_SESSION['logged_in']=true;
    header("location:index.php");
    exit();
}
?>
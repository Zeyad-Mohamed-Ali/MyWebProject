<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require 'sendemail/phpmailer/src/Exception.php';
 require 'sendemail/phpmailer/src/PHPMailer.php';
 require 'sendemail/phpmailer/src/SMTP.php';
 
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
    
    $mail=new PHPMailer();
    
    $mail->isSMTP();

    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ae154978@gmail.com';
    $mail->Password = 'ywmnqohfazhqcypl';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->setFrom('ae154978@gmail.com');
    $mail->addAddress($EMAIL);
    $mail->isHTML(true);
    $mail->Subject = 'Online programing';
    $mail->Body = 'Welcome '.$NAME.' to our site for more information +967 779 834 227';
    $mail->send();
    
    $_SESSION['logged_in']=true;
    header("location:index.php");
    exit();
}
?>
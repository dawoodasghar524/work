<?php
include_once 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $insert = "INSERT INTO `signup`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
    $query = mysqli_query($conn, $insert);
    if($query){
        echo 'ok';
    }else{
        echo 'error';
    }
}
?>
<?php
$dbname = 'php';
$dbroot = 'root';
$dbpass = '';
$dbhost = 'localhost';
$conn = new mysqli($dbhost,$dbroot,$dbpass,$dbname);
if($conn){
    echo 'ok';
}else{
    echo 'not connected';
}
?>
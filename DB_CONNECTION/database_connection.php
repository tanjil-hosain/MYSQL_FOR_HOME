<?php
$database= mysqli_connect("localhost", "root", "","student_reg");
if(!$database){
    die("database link is inavlid!!");
} echo "Connected";
?>
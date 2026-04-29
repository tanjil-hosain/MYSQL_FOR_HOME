<?php
include_once("sidebar.php");
$database = mysqli_connect("localhost", "root", "", "gedget_shop");

if(isset($_GET['delete'])){
    $delete= $_GET['delete'];

    $sql = "DELETE FROM products WHERE id = '$delete'";
    if(mysqli_query($database, $sql)){
        header("location:admin.php");
    }

}
?>
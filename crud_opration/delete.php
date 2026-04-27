<?php
$db= mysqli_connect("localhost", "root", "", "crud");
if(isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $sql = "DELETE FROM products WHERE id ='$delete'";
    if(mysqli_query($db, $sql)== TRUE){
        header("location:view.php");
        
    }
}
?> <br><br>
<button><a href="insert.php">ADD Product</a></button>
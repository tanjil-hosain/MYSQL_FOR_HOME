<?php
$db = mysqli_connect("localhost", "root", "", "crud");
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (name, price) VALUES('$name', '$price')";
    if(mysqli_query($db, $sql)){
        header("location:insert.php");
        exit();
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <br> <br>
        <input type="text" name="name"> <br> <br>
        price : <br>
         <br>
         <input type="text" name="price"> <br><br>
         <input type="submit" name="insert" value="ADD Product">
    </form>
</body>
</html>
<?php
$database = mysqli_connect("localhost", "root", "", "crud");
 $id = $_GET['id'];
 $data = mysqli_query($database, "SELECT * FROM products WHERE id = '$id' ");
 $row = mysqli_fetch_assoc($data);

 if(isset($_POST['update'])){
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET name = '$name', price = '$price' WHERE id= '$id'";

    if(mysqli_query($database, $sql)){
        header("location:view.php");

    }
 }

?>
<form action="" method="post">
    Name: <br>
    <input type="text" name="name"value="<?php echo $row['name'] ?>" > <br>
    Price: <br>
    <input type="text" name="price"value="<?php echo $row['price'] ?>" > <br>
    <input type="submit" name="update" value="Save & Change">

</form>
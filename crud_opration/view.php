<?php
$db = mysqli_connect("localhost", "root", "", "crud");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $view = $db->query("SELECT * FROM products");
            while(list($id, $name, $price)= $view->fetch_row()){
            ?>
            <tr>
                <td><?php  echo $id;?></td>
                <td><?php  echo $name;?></td>
                <td><?php  echo $price;?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
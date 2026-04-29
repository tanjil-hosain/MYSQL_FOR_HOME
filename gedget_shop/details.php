<?php
$database = mysqli_connect("localhost", "root", "", "gedget_shop");

$id = $_GET['id'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg border-0 rounded-4 mx-auto" style="max-width: 700px;">

        <!-- Header -->
        <div class="card-header bg-primary text-white text-center py-3">
            <h2 class="mb-0">Single Product Details</h2>
        </div>

        <!-- Body -->
        <div class="card-body p-4">

            <div class="row align-items-center">
                <?php 
                $singel_view = $database->query("SELECT *FROM products WHERE id= '$id'");
                while(list($id, $name, $price, $brand_id, $img)= $singel_view->fetch_row()){

               
                 ?>

                <!-- Product Image -->
                <div class="col-md-5 text-center">
                    <img 
                        src="uploads/<?php echo $img; ?>" 
                        alt="Product Image"
                        class="img-fluid rounded shadow-sm"
                        style="max-height: 280px;"
                    >
                </div>

                <!-- Product Info -->
                <div class="col-md-7">

                    <h3 class="mb-3">
                        <?php echo$name; ?>
                    </h3>

                    <p class="fs-5 mb-2">
                        <strong>Product ID :</strong>
                        <?php echo $id; ?>
                    </p>

                    <p class="fs-5 mb-2">
                        <strong>Price :</strong>
                        <?php echo$price; ?> ৳
                    </p>

                    <p class="fs-5 mb-4">
                        <strong>Brand ID :</strong>
                        <?php echo $brand_id; ?>
                    </p>

                    <a href="view.php" class="btn btn-dark px-4">
                        ← Back to Products
                    </a>

                </div>
                <?php  } ?>

            </div>

        </div>

        <!-- Footer -->
        <div class="card-footer text-center text-muted">
            © 2026 Gedget_shop
        </div>

    </div>

</div>

</body>
</html>
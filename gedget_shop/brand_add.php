<?php
$database = mysqli_connect("localhost", "root", "", "gedget_shop");

if(isset($_POST['brand'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $sql = "INSERT INTO brands (name, contact) VALUES('$name', '$contact')";

    if(mysqli_query($database, $sql)){
        header("location: product_add.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRAND ADD</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow p-4">
                <h2 class="text-center mb-4">BRAND ADD</h2>

                <form action="" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Brand Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Brand Name">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Contact</label>
                        <input type="text" name="contact" class="form-control" placeholder="Contact">
                    </div>

                    <button type="submit" name="brand" class="btn btn-primary w-100">
                        Submit
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
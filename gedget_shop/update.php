<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow p-4">
                    <h2 class="text-center mb-4">PRODUCT ADD</h2>

                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Brand Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Brand_id</label>
                            <select name="brand_id" id="">
                                <?php 
                                $brand_data = $database->query("SELECT * FROM brands");
                                while(list($id, $name) = $brand_data->fetch_row()){
                                    echo"<option value = '$id'> $name</optiom>";
                                    
                                }
                                 ?>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product</label>
                            <input type="file" name="img" class="form-control">
                        </div>

                        <button type="submit" name="product" class="btn btn-primary w-100">
                            ADD Product
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include_once("sidebar.php");
$database = mysqli_connect("localhost", "root", "", "gedget_shop");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table Design</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
    .container{
        margin-left: 250px;
    }
  </style>
</head>
<body class="bg-light">

<div class="container  mt-5">
  <div class="card shadow-lg border-0 rounded-4">
    
    <div class="card-header bg-primary text-white text-center">
      <h3 class="mb-0">Available Product</h3>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
          
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Brand_id</th>
              <th>Product</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php 
            $show = $database->query("SELECT * FROM products");

            while(list($id, $name, $price, $brand_id, $product) = $show->fetch_row()){
            ?>
            
            <tr>
              <td><?php echo $id; ?></td>
              <td><?php echo $name; ?></td>
              <td><?php echo $price; ?> ৳</td>
              <td><?php echo $brand_id; ?></td>

              <td>
                <img src="uploads/<?php echo $product; ?>" 
                     alt="pic" 
                     width="50px"
                     class="rounded">
              </td>

              <td>
                <a href="details.php?id=<?php echo $id; ?>" 
                   class="btn btn-primary btn-sm">
                   View Details
                </a>
              </td>
            </tr>

            <?php } ?>
          </tbody>

        </table>
      </div>
    </div>

    <div class="card-footer text-center text-muted">
      © 2026 Gedget_shop
    </div>

  </div>
</div>

</body>
</html>
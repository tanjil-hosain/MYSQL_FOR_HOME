<?php
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
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
      <div class="card-header bg-primary text-white text-center">
        <h3 class="mb-0">Availavel Product</h3>
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
                <th>Detalis</th>
              </tr>
            </thead>

            <tbody>
                <?php 
                $show = $database->query("SELECT * FROM products");
                while(list($id, $name, $price, $brand_id,$product) = $show->fetch_row()){

               
                 ?>
                 <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name;?></td>
                    <td><?php echo $price;?></td>
                    <td><?php echo $brand_id;?></td>
                    <td><img src="uploads/<?php echo $product; ?>" alt="pic" width="40px"></td>
                 </tr>

                 <?php  } ?>
       
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
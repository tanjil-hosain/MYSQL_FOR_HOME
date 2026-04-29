<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Shop Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }
        /* সাইডবার স্টাইল */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            padding-top: 20px;
            z-index: 1000;
        }
        /* মেইন কনটেন্ট এরিয়া */
        .main-content {
            margin-left: 250px; /* সাইডবারের উইডথ অনুযায়ী গ্যাপ */
            padding: 20px;
            min-height: 100vh;
        }
        .nav-link {
            color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px 10px;
        }
        .nav-link:hover, .nav-link.active {
            background-color: #f8f9fa;
            color: #0d6efd;
        }
    </style>
</head>
<body>

    <div class="sidebar d-flex flex-column">
        <div class="px-4 mb-4">
            <h4 class="text-primary">Gadget Shop</h4>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="admin.php">ADMIN DASHBORD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="brand_add.php">BRAND ADD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product_add.php">PRODUCT ADD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view.php">AVAILABLE PRODUCT</a>
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
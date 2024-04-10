<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- Include Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/productview.css">
    <style>
        #product-image{
            height: 300px;
        }
    </style>
</head>

<body>
    <div class="container-fluid-lg m-2">
        <h1 class="heading">KRUSHI MITRA</h1>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navabr-brand ">
                        <img src="images/logo.png" class="d-inline-block align-top img" alt="Logo not found">
                    </a>

                    <button class="navbar-toggler bg-white mx-3" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Labour_Feature.php">LABOUR REQUIREMENT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="social_media.php">SOCIAL MEDIA INTEGRATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="wholesaler.php">WHOLESALER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product.php">PRODUCT AND SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">LOGIN</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <?php
    // Include database connection
    include "database/dbconnect.php";

    // Fetch product data from the database
    $sql = "SELECT * FROM addproduct1 where id = $_GET[id]"; // Assuming your table name is addproduct1
    $result = mysqli_query($con, $sql);

    // Check if there are any records
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            // Display product information inside the container
            echo '<div class="container" id="product-container">';
            echo '<img class="img-fluid" id="product-image" src="' . $row['images'] . '" alt="Product Image">';
            echo '<div id="product-details">';
            echo '<h2>' . $row['product_name'] . '</h2>';
            echo '<p>Price: ₹' . $row['Product_price'] . '</p>';
            // You can include additional information here such as rating, brand, etc.
            echo '</div>';
            echo '<div id="product-description">';
            echo '<h3>Product Information:</h3>';
            echo '<p>' . $row['add_info'] . '</p>';
            echo '</div>';
            echo '<a href="paymentpages/1user_page.php" class="btn btn-success" style="width: 100%;">BUY PRODUCD</a>';

            echo '</div>';
        }
    } else {
        echo "0 results";
    }

    // Close database connection
    mysqli_close($con);
    ?>
</body>
</html>
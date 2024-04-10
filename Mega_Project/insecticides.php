<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Krushi Mitra</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/seeds.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar  -->
    <div class="container-fluid-lg m-2">
        <h1 class="heading">KRUSHI MITRA</h1>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navabr-brand">
                        <img src="images/logo.png" class="d-inline-block align-top img" alt="Logo not found" />
                    </a>

                    <button class="navbar-toggler bg-white mx-3" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav ms-auto">
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

    <main>
        <!-- slider -->
        <div class="container-fluid">
            <div class="row py3">
                <div class="col">
                    <div class="carousel slide" id="myCarousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="2000">
                                <img src="images/productimg/slide_insect.jpg" alt="slide" class="d-block" />
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="images/productimg/slide2.jpg" alt="slide" class="d-block" />
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="images/productimg/slide.webp" alt="slide" class="d-block" />
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="images/productimg/slide1.jpg" alt="slide" class="d-block" />
                            </div>
                        </div>
                        <a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#myCarousel" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-success m-2">
            <h3 class="prohed">INSECTICIDES</h3>
            <button class="navbar-toggler bg-light m-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="seeds.php">SEEDS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insecticides.php">INSECTICIDES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nutrients.php">NUTRIENTS</a>
                    </li>
                </ul>
                <form action="" method="GET" class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Search by Name..." name="search">
                    <button class="btn btn-outline-primary" type="submit" style="color: white;">Search</button>
                </form>

            </div>
        </nav>

        <div class="container mt-5">
            <?php
            // Include database connection
            include "database/dbconnect.php";
            $search = "";

            // Check if search parameter is set in URL
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
            }

            // Fetch products based on selected type and search keyword
            $sql = "SELECT p_id, product_name, Product_price, product_type, product_images FROM addproduct WHERE product_type = 'Insecticides'";
            if (!empty($search)) {
                $sql .= " AND product_name LIKE '%$search%'";
            }
            $result3 = mysqli_query($con, $sql);

            ?>

            <div class="row">
                <?php
                // Loop through fetched products and display them in cards
                while ($row = mysqli_fetch_assoc($result3)) {
                ?>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="<?php echo $row['product_images']; ?>" height="200px" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                                <p class="card-text">Price: <?php echo $row['Product_price']; ?> ₹</p>
                                <?php
                                echo "<button class='btn btn-primary' onclick='viewfun( $row[p_id] )'>VIEW PRODUCT</button>";
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <?php
            // Close database connection
            mysqli_close($con);
            ?>
            
        </div>
        <script>
            function viewfun(e) {
                window.location.href = "productview.php?id=" + e;
            }
        </script>
    </main>
</body>

</html>
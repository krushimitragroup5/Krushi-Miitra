<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Krushi Mitra</title>
    <style>
        .buttn1 {
            background-color: #000000;
            padding: 9px 20px;
            float: right;
            margin-top: 18px;
            margin-bottom: 2px;
            text-decoration: none;
            color: white;
        }

        .bt {
            background-color: #247e5a;
            padding: 9px 20px;
            float: right;
            margin-top: 18px;
            margin-right: 4px;
            margin-bottom: 2px;
            text-decoration: none;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/vegetable.css">
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
                    <a href="" class="navabr-brand ">
                        <img src="images/logo.png" class="d-inline-block align-top img" alt="Logo not found">
                    </a>
                    <button class="navbar-toggler bg-white mx-3" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav">
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


    <!-- slider -->
    <div class="container-fluid">
        <div class="row py3">
            <div class="col">
                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active " data-interval="2000">
                            <img src="images/wholeimages/wholesaler2.jpg" alt="slide" class="d-block">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="images/slide.webp" alt="slide" class="d-block">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="images/wholeimages/wholesaler1.jpg" alt="slide" class="d-block">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="images/slide1.jpg" alt="slide" class="d-block">
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
    </main>

    <!-- wholesaler navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h3 class="wholeHed">WHOLESALER SYSTEM</h3>
            <button class="navbar-toggler bg-white mx-3" data-toggle="collapse" data-target="#wholesalernav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="wholesalernav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="wholesaler.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="w_vegetable.php">Farmer Booking list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginsecure.php">Farmer Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    include "database/dbconnect.php";
    $sql2 = "SELECT name, age, mobileNumber, address, type, quantity, rate FROM wholesalerregistration WHERE type = 'Vegetable'";
    $result2 = mysqli_query($con, $sql2);

    ?>

    <div class="container">
        <div class="row">
            <?php
            // Display fetched data in cards
            while ($row = mysqli_fetch_assoc($result2)) {
            ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Vegetable And Fruits Wholesaler</h5>
                                <p class="card-text" style="font-size: 20px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg>
                                    <b> <u> <?php echo $row['name']; ?> </u></b> <br>
                                    <b>Age:</b> <?php echo $row['age']; ?><br>
                                    <b>Mobile Number:</b> <?php echo $row['mobileNumber']; ?><br>
                                    <b>Address:</b> <?php echo $row['address']; ?><br>
                                    <b>Type:</b> <?php echo $row['type']; ?><br>
                                    <b>Order Quantity:</b> <?php echo $row['quantity']; ?><br>
                                    <b>Rate:</b> <?php echo $row['rate']; ?>₹<br>
                                </p>
                                <a href="#" class="btn btn-primary">Update Rate</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
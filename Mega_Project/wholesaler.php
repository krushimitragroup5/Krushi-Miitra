<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Krushi Mitra</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/wholesaler.css">
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

    <main>
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
                        <a class="nav-link" aria-current="page" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wholelist.php">List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--container 1-->

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="images/rice.jpg" class="w-block" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">Rice Wholesaler</h3>
                    <p class="card-text">Due to the increasing demands for the most popular stape wholesaler rice distributors have many opportunities to develo.
                        this is Krushi Mitra webside.
                    </p>
                    <p class="card-text1"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <a class="btn1 btn-primary  btn-sm" href="wholelist.php" role="button">see more</a>
                </div>
            </div>
        </div>
    </div>

    <!--container 2-->

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="images/wheat1.jpg" class="w-block" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">Wheat Wholesaler</h3>
                    <p class="card-text">A wheat wholesaler system refers to a business or
                        distribution network that specializes in buying wheat in bulk
                        quantities from producers.</p>
                    <p class="card-text1"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <a class="btn1 btn-primary  btn-sm" href="wheat.php" role="button">see more</a>
                </div>
            </div>
        </div>
    </div>

    <!--container 3-->

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="images/vegetables.jpg" class="w-block" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">Vegetable Wholesaler</h3>
                    <p class="card-text">The wholesaler marketing structure for fresh vegetable
                        includes linkages between groups of producer -oriented,
                        consumer-oriented, and redistribution markets</p>
                    <p class="card-text1"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <a class="btn1 btn-primary  btn-sm" href="vegetable.php" role="button">see more</a>
                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>
</body>

</html>
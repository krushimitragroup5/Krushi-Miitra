<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Krushi Mitra</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/social_media.css">
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
        <!-- social media page -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <h1 class="social_heading">Social Media Integration</h1>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="loginsecure1.php" class="nav-link">POST</a>
                    </li>
                </ul>
                <form action="" method="GET" class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Search by location..." name="location">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </nav>
        </div>


        <div class="container-fluid">
            <div class="row p-2">
                <?php
                include "database/dbconnect.php";
                $sql = "SELECT * FROM mediapost";

                if (isset($_GET['location'])) {
                    $searchLocation = $_GET['location'];
                    $sql = "SELECT * FROM mediapost WHERE location LIKE '%$searchLocation%'";
                } else {
                    $sql = "SELECT * FROM mediapost";
                }
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Get current date
                    $currentDate = date('Y-m-d');

                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Check if the harvest date has exceeded the specified duration
                        $harvestDate = $row['harvest_date'];
                        $expirationDate = date('Y-m-d', strtotime($harvestDate . ' +3 months')); // Change '3 months' to your desired duration
                        if ($currentDate > $expirationDate) {
                            // If the current date exceeds the expiration date, delete the record
                            $id = $row['id']; // Assuming your table has an 'id' column
                            $deleteQuery = "DELETE FROM mediapost WHERE id = $id";
                            if (mysqli_query($con, $deleteQuery)) {
                                echo "Record with ID: $id has been deleted.<br>";
                            } else {
                                echo "Error deleting record: " . mysqli_error($con) . "<br>";
                            }
                        } else {
                            // If the record is still within the specified duration, display it
                ?>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img src="<?php echo $row['image']; ?>" class="card-img" alt="Crop Image">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <b><?php echo $row['farmer_name']; ?></b><br>
                                                <b>REQUIRED QUANTITY:</b> <?php echo $row['crop_quantity']; ?> Hector<br>
                                                <b>CROP DURATION:</b> <?php echo $row['planting_date']; ?> to <?php echo $row['harvest_date']; ?><br>
                                                <b>CROP NAME:</b> <?php echo $row['crop_name']; ?><br>
                                                <b>LOCATION:</b> <?php echo $row['location']; ?><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                } else {
                    echo "0 results";
                }

                // Close database connection
                mysqli_close($con);
                ?>

            </div>
        </div>
    </main>

</body>
</html>
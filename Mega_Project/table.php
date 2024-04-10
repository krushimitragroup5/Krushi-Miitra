<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Styled Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/table.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    include "database/dbconnect.php";
    // Assuming $con is your database connection



    // Fetch data from the database based on selected type
    if (isset($_POST['typeFilter'])) {
        $typeFilter = $_POST['typeFilter'];
        $sql2 = "SELECT * FROM labour_registration WHERE type = '$typeFilter'";
        $result2 = mysqli_query($con, $sql2);
    }

    // Close connection
    $con->close();
    ?>

    <div class="container">
        <h2>Labour Requirement</h2>
        <form method="post">
            <div class="form-group">
                <select class="form-control" name="typeFilter">
                    <option value="">Choose types of Woker's work</option>
                    <option value="Crop Cultivation">Crop Cultivation</option>
                    <option value="Irrigation">Irrigation</option>
                    <option value="Soil Management">Soil Management</option>
                    <option value="Harvesting">Harvesting</option>
                    <option value="Seasonal Planning">Seasonal Planning</option>
                    <option value="Combine Drivers">Combine Drivers</option>
                    <option value="Pesticides Applicators">Pesticides Applicators</option>
                </select>
                <input type="submit" class="btn btn-primary" style="width: 50%;" value="Filter">
            </div>
        </form>
        <table class="table bg-white">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Work Name</th>
            </tr>
            <?php
            if (isset($result2)) {
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['mobileNumber'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
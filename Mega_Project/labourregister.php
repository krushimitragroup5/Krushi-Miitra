<?php
include "database/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

                    <button class="navbar-toggler bg-white mx-3 " data-toggle="collapse" data-target="#mynavbar">
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

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <h4>Login and Registration</h4>
            <button class="navbar-toggler bg-white mx-3 " data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="farmerregister.php">Farmer Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="labourregister.php">Labour Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wholesalerregister.php">Wholesaler Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registershopkeeper.php">Shopkeeper Registration</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name1'];
            $age = $_POST['age1'];
            $mobileNumber = $_POST['mobileNumber1'];
            $address = $_POST['address1'];
            $gender = $_POST['gender1'];
            $type = $_POST['type1'];
            $username = $_POST['username1'];
            $password = $_POST['password1'];
            $confirmPassword = ($_POST["confirmPassword1"]);

            // SQL query to insert data into the database
            $sql1 = "INSERT INTO labour_registration (name, age, mobileNumber, address, gender, type, username, password) VALUES ('$name', '$age', '$mobileNumber', '$address', '$gender', '$type', '$username', '$password')";
            $result = mysqli_query($con, $sql1);

            if ($password != $confirmPassword) {
                $error = "Password and Confirm Password do not match";
            } elseif ($result) {
        ?>
                <script>
                    alert("Register Successfull");
                </script>
        <?php
            } else {
                $error = "Error: " . $sql . "<br>" . $con->error;
            }
        }

        // Close connection
        $con->close();
        ?>

        <form id="registrationForm" method="post">
            <h4 class="text-center mb-4">Labour Registration</h4>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="Name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="Name" name="name1" placeholder="Enter Your Full Name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg-6 mb-3">
                    <label for="num" class="form-label">Age :</label><br>
                    <input type="number" class="form-control" name="age1" id="num">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="mNumber" class="form-label">Mobile Number:</label>
                    <input type="number" class="form-control" id="mNumber" name="mobileNumber1" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="Address1" class="form-label">Address :</label><br>
                    <input type="text" class="form-control" id="Address1" name="address1" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Gender:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender1" id="male" name="male" value="male" required>
                        <label class="form-check-label mr-5" for="male">Male</label>

                        <input class="form-check-input" type="radio" name="gender1" id="female" name="female" value="female" required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputState">Type of Work</label>
                    <select id="inputState" class="form-control" name="type1">
                        <option selected>Choose Type Of Work</option>
                        <option>Crop Cultivation</option>
                        <option>Irrigation</option>
                        <option>Soil Management</option>
                        <option>Harvesting</option>
                        <option>Seasonal Planning</option>
                        <option>Combine Drivers</option>
                        <option>Pesticides Applicators</option>
                    </select>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="uname" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="uname" name="username1" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="pass" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pass" name="password1" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="cpass" class="form-label">Confirm Password:</label>
                    <input type="password" class="form-control" id="cpass" name="confirmPassword1" required>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit" style="width: 100%;">
        </form>
    </div>


</body>

</html>
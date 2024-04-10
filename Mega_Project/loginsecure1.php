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
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="social_post.php">HOME</a>
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

    <?php
    include "database/dbconnect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the user exists in any of the tables
        $sql_farmer = "SELECT * FROM farmer WHERE username='$username'  AND password='$password'";
        $sql_labour = "SELECT * FROM labour_registration WHERE username='$username'  AND password='$password'";
        $sql_wholesaler = "SELECT * FROM wholesalerregistration WHERE username='$username'  AND password='$password'";
        $sql_shopkeeper = "SELECT * FROM shopkeepers WHERE username='$username'  AND password='$password'";

        $result_farmer = $con->query($sql_farmer);
        $result_labour = $con->query($sql_labour);
        $result_wholesaler = $con->query($sql_wholesaler);
        $result_shopkeeper = $con->query($sql_shopkeeper);


        if ($result_farmer->num_rows == 1) {
            // User found, set session variables and redirect to a secure page
            $_SESSION['username'] = $username;
            header("Location: social_post.php"); // Change this to your secure page
            exit();
        } elseif ($result_labour->num_rows == 1) {
            // User found, set session variables and redirect to a secure page
            $_SESSION['username'] = $username;
            header("Location: social_post.php"); // Change this to your secure page
            exit();
        } elseif ($result_wholesaler->num_rows == 1) {
            // User found, set session variables and redirect to a secure page
            $_SESSION['username'] = $username;
            header("Location: social_post.php"); // Change this to your secure page
            exit();
        } elseif ($result_shopkeeper->num_rows == 1) {
            // User found, set session variables and redirect to a secure page
            $_SESSION['username'] = $username;
            header("Location: social_post.php"); // Change this to your secure page
            exit();
        } else {
            // User not found or incorrect password, show error message
    ?>
            <script>
                alert("Invalid username or password");
            </script>
    <?php
        }
    }
    ?>


    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <label for="loginUsername">Username:</label>
                <input type="text" class="form-control" id="loginUsername" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="loginPassword">Password:</label>
                <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>



</body>

</html>
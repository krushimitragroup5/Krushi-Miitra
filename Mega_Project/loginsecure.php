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

    <?php
    include "database/dbconnect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Check if the user exists in any of the tables
        $sql_farmer = "SELECT * FROM farmer WHERE username='$username'  AND password='$password'";
        $result_farmer = $con->query($sql_farmer);

        if ($result_farmer->num_rows == 1) {
            // User found, set session variables and redirect to a secure page
            $_SESSION['username'] = $username;
            header("Location: wholesalerdetail.php"); // Change this to your secure page
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
            <h2>login for Farmer Booking</h2>
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
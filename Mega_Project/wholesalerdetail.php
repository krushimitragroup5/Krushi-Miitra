<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Registration Form</title>
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: green;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: gray;
      color: white;
      margin: 4px;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      /* text-decoration:none; */
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .btn1 {
      bottom: 2px;
      padding: 13px 40px;
      background-color: black;
      text-decoration: none;
    }

    .btn2 {
      background-color: #4b524e;
      color: white;
    }
  </style>
</head>

<body>
  <!-- farmer detail -->
  <div class="container">
    <h1>Farmer Details</h1>

    <?php
    include "database/dbconnect.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Fetch form data
      $name = $_POST['name'];
      $mobileNumber = $_POST['mobileNumber'];
      $address = $_POST['address'];
      $product = $_POST['product'];
      $rate = $_POST['rate'];
      $type = $_POST['type'];


      // SQL query to insert data into the database
      $sql1 = "INSERT INTO farmerbooking (name, mobileNumber, address, product, rate,type) VALUES ('$name', '$mobileNumber','$address', '$product', '$rate', '$type')";
      $result = mysqli_query($con, $sql1);
      if ($result) {
        header("Location: wholesaler.php");
        exit();
      } else {
        $error = "Error: " . $sql . "<br>" . $con->error;
      }
    }

    // Close connection
    $con->close();
    ?>
    <form method="post" action="">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div>
        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="mobileNumber" required>
      </div>
      <div>
        <label for="Address1">Address:</label>
        <input type="text" class="form-control" id="Address1" name="address" required>
      </div>
      <div>
        <label for="product">Product:</label>
        <input type="text" id="product" name="product" required>
      </div>
      <div>
        <label for="range">Interested Rate:</label>
        <input type="tel" id="range" name="rate" required>
      </div>
      <div>
        <label for="inputState">Type of Wholesaler</label>
        <select id="inputState" class="form-control" name="type">
          <option selected>Type of Wholesaler</option>
          <option>Rice</option>
          <option>Wheat</option>
          <option>Vegetable</option>
        </select>
      </div>
      <div class="d-flex justify-content-between">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>

  <footer>

  </footer>
</body>

</html>
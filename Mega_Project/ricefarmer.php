<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Krushi Mitra</title>
  <style>
    .container {
      background-color: rgb(122, 212, 224);

    }
    .card {
      margin: 6px;
      background: linear-gradient(to right, #ffffff, rgb(187, 215, 213))
    }
    .heading {
      padding-left: 350px;
      background-color: rgb(123, 215, 195);
    }
    .btn {
      bottom: 2px;
      padding: 7px 40px;
      background-color: rgb(0, 0, 0);
    }
    .btn1 {
      background-color: aqua;
    }

    @media (max-width: 62em) {
      .heading {
        padding-left: 0;
      }
    }
  </style>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/farmer.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include "database/dbconnect.php";
  $sql2 = "SELECT name, mobileNumber, address, product, rate, type FROM farmerbooking WHERE type = 'rice'";
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
              <p class="card-text" style="font-size: 20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <b> <u> <?php echo $row['name']; ?> </u></b> <br>
                <b>Mobile Number:</b> <?php echo $row['mobileNumber']; ?><br>
                <b>Address:</b> <?php echo $row['address']; ?><br>
                <b>Product Name:</b> <?php echo $row['product']; ?><br>
                <b>Rate:</b> <?php echo $row['rate']; ?>₹<br>
                <b>Type:</b> <?php echo $row['type']; ?><br>
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
</html>
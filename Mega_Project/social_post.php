<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Krushi Mitra</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/social_post.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
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
        <div class="container">
            <?php
            include "database/dbconnect.php";
            // Assuming you have already established a conection to your MySQL database

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $name = $_POST['name'];
                $cropname = $_POST['cropname'];
                $quantity = $_POST['quantity'];
                $plantingduration = $_POST['plantingduration'];
                $harvestduration = $_POST['harvestduration'];
                $location = $_POST['location'];

                // Image upload handling
                $targetDir = "images/socialimg/"; // Directory where uploaded images will be stored
                $targetFile = $targetDir . basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                $uploadOk = 1;

                // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if ($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }

                // Check if file already exists
                if (file_exists($targetFile)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["image"]["size"] > 5000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }

                // Allow certain file formats
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" && $imageFileType != "webp"
                ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                        // echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
                        // Prepare SQL statement to insert data into database
                        $sql = "INSERT INTO mediapost (farmer_name, crop_name, crop_quantity, planting_date, harvest_date, location, image) 
                    VALUES ('$name', '$cropname', '$quantity', '$plantingduration', '$harvestduration', '$location', '$targetFile')";
                        // Attempt to execute the SQL statement
                        if (mysqli_query($con, $sql)) {
                            header("location: social_media.php");
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        }
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }

                // Close database conection
                mysqli_close($con);
            }
            ?>
            <form method="post" enctype="multipart/form-data">
                <h2 class="mt-5 mb-4">Crop Registration Form</h2>
                <div class="form-group">
                    <label for="FName">Farmer Name</label>
                    <input type="text" class="form-control" id="FName" name="name" placeholder="Enter Farmer name">
                </div>
                <div class="form-group">
                    <label for="cropName">Crop Name</label>
                    <input type="text" class="form-control" id="cropName" name="cropname" placeholder="Enter crop name">
                </div>
                <div class="form-group">
                    <label for="cropQuantity">Crop Quantity</label>
                    <input type="number" class="form-control" id="cropQuantity" name="quantity" placeholder="Enter crop quantity">
                </div>
                <div class="form-group">
                    <label for="pduration">Planting Crop Date</label>
                    <input type="date" class="form-control" id="pduration" name="plantingduration" placeholder="planting date">
                </div>
                <div class="form-group">
                    <label for="hduration">Harvest Crop date</label>
                    <input type="date" class="form-control" id="hduration" name="harvestduration" placeholder="harvesting date">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter location">
                </div>
                <div class="form-group">
                    <label for="cropImage">Crop Image</label>
                    <input type="file" class="form-control-file" name="image" id="cropImage">
                    <img class="img img-fluid" src="" alt="Choose Image" width="300" height="250">
                </div>

                <button type="submit" class="btn btn-primary">Post</button>
            </form>

        </div>
    </main>
    <footer>

    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fileInput = document.getElementById("cropImage");
            const imgElement = document.querySelector(".form-group .img");

            fileInput.addEventListener("change", function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function() {
                        imgElement.src = reader.result;
                    };
                }
            });
        });
    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            padding: 20px;
        }

        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 2px solid black;
            border-radius: 10px;
        }

        .form-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <?php
        include "database/dbconnect.php";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $productName = $_POST['productname'];
            $productPrice = $_POST['product_price'];
            $add_info = $_POST['addinfo'];

            // Image upload handling
            $targetDir = "images/productimg/"; // Directory where uploaded images will be stored
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
                echo "Sorry, only JPG, JPEG, PNG, GIF & webp  files are allowed.";
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
                    $sql = "INSERT INTO addproduct1 (product_name, Product_price, images, add_info) 
                    VALUES ('$productName', '$productPrice', '$targetFile', '$add_info')";
                    // Attempt to execute the SQL statement
                    if (mysqli_query($con, $sql)) {
                        header("location: product.php");
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
        <form id="additionalDetailsForm" method="post" enctype="multipart/form-data">
            <h2>Additional Details</h2>
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productname" required>
            </div>
            <div class="form-group">
                <label for="productPrice">Product Price</label>
                <input type="number" class="form-control" id="productPrice" name="product price" required>
            </div>
            <div class="form-group">
                <label for="additionalImages">Additional Images</label>
                <input type="file" class="form-control-file" id="additionalImages" accept="image/*" name="image" multiple>
                <img class="img img-fluid" src="" alt="Choose Image" width="300" height="250">
            </div>

            <div class="form-group">
                <label for="additionalInfo">Product Information</label>
                <input type="text" class="form-control" id="additionalInfo" name="addinfo" required>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fileInput = document.getElementById("additionalImages");
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
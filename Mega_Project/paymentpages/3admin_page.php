<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            margin-top: 50px;
        }

        .payment-form {
            box-shadow: 0px 0px 10px;
            padding: 30px;
        }

        .back img {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .heading h2 {
            font-weight: bolder;
        }

        .btn-confirm {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            color: white;
        }

        .btn-confirm:hover {
            color: white;
            font-weight: bold;
            border: 2px solid wheat;

        }
    </style>
</head>

<body>
    <div class="container">
        <form class="payment-form" method="post" action="./4admin_server.php">
            <div class="back">
                <a href="" style="text-decoration:none; color:black;">
                    <h6> <img src="./images/back.gif" alt="" width="30px" height="30px"> BACK</h6>
                </a>
            </div>
            <div class="heading text-center">
                <h2><img src="./images/confim.gif" alt="" width="50px" height="50px" style="position: relative;top: -5px;">
                    Payment Confirmation</h2>
                <p style="margin-bottom: 30px;"> Enter requied details to check the payment existance</p>
            </div>
            <div class="form-group">
                <label for="email">Payer's Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter payer's email" required>
            </div>

            <div class="form-group">
                <label for="transactionId">Transaction ID:</label>
                <input type="text" class="form-control" name="transactionId" id="transactionId" placeholder="Enter transaction ID" required>
            </div>
            <button type="submit" class="btn btn-confirm btn-warning">Confirm Payment</button>
        </form>
    </div>
</body>

</html>
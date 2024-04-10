<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(./images/header-bg.jpg) center center no-repeat,
            linear-gradient(white, black);
            background-size: contain;
        }

        .payment-container {}

        .payment-form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px;
            background-color: white;
        }

        .heading {
            margin-bottom: 20px;
        }

        .submit-btn {
            margin-top: 20px;
            width: 100%;
            color: white;
            /* font-weight: bold; */
        }

        .submit-btn:hover {
            color: white;
            font-weight: bold;
            border: 2px solid wheat;
        }

        .contact-us {
            margin-top: 30px;
            display: flex;
            justify-content: right;
        }
    </style>
</head>

<body>
    <div class="payment-container">
        <form class="payment-form" method="post" action="./server.php">
            <div class="heading">
                <h2 class="text-center">
                    <img src="./images/card.gif" alt="" height="50px" width="50px"
                        style="position: relative; top: -5px" />
                    INITIALIZE YOUR PAYMENT
                </h2>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required />
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile number</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" required />
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Selected Services</label>
                <input type="text" class="form-control" id="service" name="services" required />
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="mobile" class="form-control" id="amount" name="amount" required />
            </div>
            <button type="submit" class="btn submit-btn btn-warning" onclick="pay()">
                Submit
            </button>
            <div class="contact-us">
                <a href="./contactus.php" style="text-decoration: none; color: black" target="_self">
                    <img src="./images/help.gif" alt="" width="30px" height="30px"
                        style="position: relative; top: -3px" />
                    <span style="font-weight: bold"> CONTACT US </span>
                </a>
            </div>
        </form>
    </div>

    <script>
        function pay() {
            var amount = document.getElementById("amount").value;
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("mobile").value;

            var options = {
                key: "rzp_test_9BJ0z9nca8Qlth",
                amount: amount * 100,
                currency: "INR",
                name: "Apna Salon Services",
                description: "Payment for salon services",
                image: "https://example.com/logo.png",
                handler: function (response) {
                    alert(
                        "Payment successful! Payment ID: " + response.razorpay_payment_id
                    );
                },
                prefill: {
                    name: email,
                    email: email,
                    contact: mobile,
                },
                theme: {
                    color: "#007bff",
                },
            };

            var rzp = new Razorpay(options);
            rzp.open();
        }
    </script>
</body>

</html>
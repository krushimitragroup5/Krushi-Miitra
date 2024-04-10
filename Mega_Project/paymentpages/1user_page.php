<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(./images/header-bg.jpg) center center no-repeat,
                linear-gradient(white, black);
            background-size: contain;
            padding: 10px;
        }
        
        .back img {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }   
        .payment-form {
            max-width: 500px;
            margin: auto;
            padding: 10px;
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
    <form class="payment-form" method="post" action="./2user_server.php">
            <div class="back">
                <a href="" style="text-decoration:none; color:black;">
                    <h6> <img src="./images/back.gif" alt="" width="30px" height="30px"> BACK</h6>
                </a>
            </div>
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
                <label for="amount" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="services" name="services" required />
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="mobile" class="form-control" id="amount" name="amount" required />
            </div>
            <button type="button" class="btn submit-btn btn-warning" onclick="pay()">
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
            insert_data();
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
        function insert_data(){
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("mobile").value;
            var services = document.getElementById("services").value;
            var amount = document.getElementById("amount").value;
            // console.log(email)
            fetch("2user_server.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `email=${email}&mobile=${mobile}&services=${services} &amount=${amount}`
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.text();
            })
            .then(data => {
                console.log(data);
                // alert(data);
                // Handle the response data
            })
            .catch(error => {
                console.error("There was a problem with your fetch operation:", error);
            });
        }
    </script>
</body>
</html>
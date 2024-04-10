<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact us</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            text-align: center;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            width: 100%;
        }

        section {
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .services-section {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #555;
        }

        .social-icons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .social-icon {
            margin: 0 10px;
            width: 30px;
            height: 30px;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            section {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <!-- <div id="navbar1">
        <a href="index.html">
            <img src="images/logos/logo5.png" width="150px" style="filter: invert(1);" alt="">
        </a>
        <input class="form-control me-2 mx-5" style="width: 75%; border: 1px solid black;" type="search"
            placeholder="Search for salon/Artist" aria-label="Search">
        <button class="btn btn-outline-dark" id="btn1" type="submit">sign in</button>
        <button class="btn btn-outline-dark" id="btn2" type="submit">sign up</button>
    </div> -->
    <!-- <nav class="navbar navbar-expand-lg bg-dark text-light px-4">
        <div class="container-fluid">
             <a class="navbar-brand text-light" href="#">YOUR SALON</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="dropdown">
                        <button class="dropbtn">Services
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <div class="header">
                            <h2>Mega Menu</h2>
                          </div>
                          <div class="row justify-content-center">
                            <div class="column">
                              <h3>Hair Care</h3>
                              <a href="#">Hair Smothing</a>
                              <a href="#">Hair Styling</a>
                              <a href="#">Hair Triming</a>
                            </div>
                            <div class="column">
                              <h3>Skin Care</h3>
                              <a href="#">Ubtan / d-tan</a>
                              <a href="#">Peel-off Waxing</a>
                              <a href="#">Bleach</a>
                            </div>
                            <div class="column">
                              <h3>Message</h3>
                              <a href="#">Full body message</a>
                              <a href="#">arms message</a>
                              <a href="#">Legs message</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="bookAppointment.html">Book
                            Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="salonLocator.html">Salon Locator</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="become partner.html">Become Partner</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light active-link" href="index.html">Contact Us</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav> -->
    <section>
        <div class="services-section">
            <h2>Contact Us </h2>
            <p class="text-center">Explore our range of salon services and pamper yourself!</p>
        </div>
        <!-- <form id="contactForm">
            <label for="serviceType">Select Service Type:</label>
            <select id="serviceType" name="serviceType" required>
                <option value="haircut">Haircut</option>
                <option value="coloring">Hair Coloring</option>
                <option value="manicure">Manicure</option>
                <option value="pedicure">Pedicure</option>
                < Add more options as needed -->
        <!-- </select>  -->

        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="number">Mob No:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Feedback:</label>
            <textarea id="message" name="message" rows="3" required></textarea>

            <button type="button" onclick="submitForm()">Submit</button>
        </form>
        <div class="row">
            <div class="col p-4" style=" display: flex;
            justify-content: center;">
                <a href="https://facebook.com" style="text-decoration: none; color: black;">
                    <i class="bi bi-facebook" style="padding: 5px 20px;"></i>
                    <svg xmlns="https://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>

                <a href="https://twitter.com" style="text-decoration: none; color: black;">
                    <i class="bi bi-twitter" style="padding: 5px 20px;"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                </a>

                <a href="https://instagram.com" style="text-decoration: none; color: black;">
                    <i class="bi bi-instagram" style="padding: 5px 20px;"></i><svg xmlns="http://www.w3.org/2000/svg"
                        width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.468 2.468 0 0 1-.919-.598c-.28-.28-.453-.546-.598-.92a5.415 5.415 0 0 1-.276-1.485c-.038-.843-.047-1.096-.047-3.232s.009-2.389.047-3.232c.035-.78.166-1.204.276-1.486.145-.373.318-.64.598-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.843-.039 1.097-.047 3.233-.047zM8 4.47a3.53 3.53 0 1 0 0 7.062 3.53 3.53 0 0 0 0-7.062zm0 1.443a2.087 2.087 0 1 1 0 4.174 2.087 2.087 0 0 1 0-4.174zM12.29.75a.747.747 0 1 1-1.492 0 .747.747 0 0 1 1.492 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Your Salon. All rights reserved.</p>
    </footer>

    <script>
        function submitForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            // Perform your validation here

            // Submit the form
            document.getElementById("contactForm").submit();
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                background-color: #A5D2F2;
                padding: 20px;
                font-family: Arial;
            }

            .main {
                max-width: 1000px;
                margin: auto;
            }

            .navbar {
                overflow: hidden;
                background-color: steelblue;
                height: 80px; /* Set the height of the navigation bar */
            }

            .navbar .logo {
                float: left;
                padding: 15px;
            }

            .navbar .navbar-right {
                float: right;
                line-height: 80px; /* Vertically center the text within the taller navigation bar */
            }

            .navbar a {
                display: inline-block;
                color: #f2f2f2;
                text-align: center;
                padding: 0 20px; /* Add padding to the navigation links */
                text-decoration: none;
            }

            .navbar a:hover {
                background-color: #ddd;
                color: black;
            }
            #contact-info {
                text-align: left;
                padding-right: 20px; /* Add some right padding for spacing */
            }
            .columns-container {
                max-width: 1800px; /* Set your desired maximum width */
                margin: 0 auto;
                background-color: aliceblue;
            }

            /* Style inputs */
            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                cursor: pointer;
            }


            input[type=submit]:hover {
                background-color: #45a049;
            }

            .column {
                float: left;
                width: 50%;
                margin-top: 6px;
                padding: 20px;
                box-sizing: border-box; /* Include padding in the element's total width */
            }
            .content {
                float: right;
                width: 80%;
                margin-top: 6px;
                padding: 10px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .column, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }
            .columnn {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh; /* This ensures the content is centered vertically */
            }

            .thank-you-message {
                background-color: lightpink;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="navbar">
            <div class="logo">
                <img src="path/to/your/logo.png" alt="Logo">
            </div>
            <div class="navbar-right">
                <a href="#home">Home</a>
                <a href="#projects">Projects</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div id="contact-info">
            <h2>Contact Me</h2>
            <p>Let's Create Something New, leave me a message:</p>
        </div>
        <div class="columns-container">
            <div class="row">
                <div class="column">
                    <!-- Form for user input -->
                    <form action="process-form.php" id="contact-form" method="post">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="singapore">Singapore</option>
                            <option value="china">China</option>
                            <option value="others">Others</option>
                        </select>
                        <label for="subject">Message</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="column">
                    <div class="content">
                        <h2>Contact Information</h2>
                        <p><i class="fas fa-envelope"></i> Email: ngyuyan2005@gmail.com</p>
                        <p><i class="fas fa-phone"></i> Phone: +65 81281312</p>
                        <p><i class="fas fa-map-marker-alt"></i> Address: Bedok North Blk 43, #14-198. S198303, Singapore</p>
                        <h2>Socials</h2>
                        <p><i class="fab fa-tiktok"></i> TikTok</p>
                        <p><i class="fab fa-linkedin"></i> Linkedin</p>
                        <p><i class="fab fa-instagram"></i> Instagram</p>


                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <!-- Thank you message container -->
            <div class="thank-you-message">
                <h2>Thank You for Contacting Me!</h2>
                <p><strong>First Name:</strong> <span id="thank-you-fname"></span></p>
                <p><strong>Last Name:</strong> <span id="thank-you-lname"></span></p>
                <p><strong>Country:</strong> <span id="thank-you-country"></span></p>
                <p><strong>Message:</strong> <span id="thank-you-message"></span></p>
            </div>
        </div>

        <script>
            document.getElementById('contact-form').addEventListener('submit', function (event) {
                event.preventDefault();

                // Get form values
                var firstName = document.getElementById('fname').value;
                var lastName = document.getElementById('lname').value;
                var country = document.getElementById('country').value;
                var message = document.getElementById('subject').value;

                // Store form values in localStorage for retrieval on the thank you page
                localStorage.setItem('firstName', firstName);
                localStorage.setItem('lastName', lastName);
                localStorage.setItem('country', country);
                localStorage.setItem('message', message);

                // Redirect to the thank you page
                window.location.href = 'thank-you.html';
            });
        </script>
    </body>
</html>

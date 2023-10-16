<?php
// Define default category
$category = "app application";

// Check if form is submitted
if (isset($_POST['category'])) {
// Sanitize and set the selected category
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
}

// Array of portfolio items for different categories
$portfolioItems = array(
    "app application" => array(
        array("title" => "Mountains", "description" => "Lorem ipsum dolor..", "image" => "images/song.jpg"),
// Add more app application items here
    ),
    "web application" => array(
        array("title" => "Car 1", "description" => "Lorem ipsum dolor..", "image" => "images/supermarket.jpg"),
// Add more web application items here
    ),
    "sketch VR" => array(
        array("title" => "Person 1", "description" => "Lorem ipsum dolor..", "image" => "images/person1.jpg"),
// Add more sketch VR items here
    ),
    "all" => array(
        array("title" => "Photo 1", "description" => "Lorem ipsum dolor..", "image" => "images/supermarket.jpg"),
// Add more items for the "all" category here
    )
);
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                background-color: skyblue;
                padding: 20px;
                font-family: Arial;
            }

            .main {
                max-width: 1000px;
                margin: auto;
            }

            h2 {
                font-size: 50px;
                word-break: break-all;
            }

            .row {
                margin: 8px -16px;
            }

            .row,
            .row > .column {
                padding: 8px;
            }

            .column {
                float: left;
                width: 33.33%;
                display: none;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            .content {
                background-color: white;
                padding: 10px;
            }

            .btn {
                border: none;
                outline: none;
                padding: 12px 16px;
                background-color: white;
                cursor: pointer;
            }

            .btn:hover {
                background-color: #ddd;
            }

            .btn.active {
                background-color: #666;
                color: white;
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
            .contact-header {
                text-align: left;
                padding: 0px 0;
            }

            .portfolio-line {
                border-top: 2px solid black; /* Set the line color to black */
                margin-bottom: 20px; /* Adjust the margin as needed */
            }

            .portfolio-buttons {
                text-align: center;
                margin-bottom: 20px;
            }
            .portfolio-buttons .btn {
                margin: 0 10px;
            }
            table {
                width: 100%;
                height: 100%;
            }
            td {
                width: 33.33%;
                height: 33.33%;
                text-align: center;
                vertical-align: middle;
            }
            img {
                max-width: 100%;
                max-height: 100%;
            }
            .table-container {
                display: none;
            }

            .table-container.active {
                display: block;
            }
        </style>
    </head>
    <body>

        <!-- Your HTML content here -->
        <div class="navbar">
            <!-- Your logo here -->
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

        <div class="portfolio-header">
            <h2>MY PORTFOLIO</h2>
        </div>

        <div class="portfolio-line"></div> <!-- Black line below MY PORTFOLIO -->


        <div class="portfolio-buttons">
            <button class="btn" onclick="showAll()">Show All</button>
            <button class="btn <?= ($category === 'all') ? 'active' : ''; ?>" onclick="showCategory('app-application')">App Application</button>
            <button class="btn <?= ($category === 'web application') ? 'active' : ''; ?>" onclick="showCategory('web-application')">Web Application</button>
            <button class="btn <?= ($category === 'sketch VR') ? 'active' : ''; ?>" onclick="showCategory('sketch-vr')">Sketch/VR Application</button>
        </div>

        <div class="row">
            <?php
            // Array of images corresponding to each category
            $categoryImages = array(
                "all" => "images/supermarket.jpg",
                "app application" => "images/mountains.jpg",
                "web application" => "images/car1.jpg",
                "sketch VR" => "images/person1.jpg"
            );

            // Get the image for the selected category
            $imagePath = isset($categoryImages[$category]) ? $categoryImages[$category] : "";

            // Display the image
            echo '<div class="column">';
            echo '<div class="content">';
            echo '<img src="' . $imagePath . '" alt="' . $category . '" style="width:100%">';
            echo '<h4>' . ucfirst($category) . '</h4>';
            echo '<p>Lorem ipsum dolor..</p>';
            echo '</div></div>';
            ?>
        </div>

        <div class="category-container" id="app-application">
            <h2>App Application</h2>
            <table>
                <tr>
                    <td>
                        <h2>Project 1</h2>
                        <img src="path/to/your/image1.jpg" alt="Project 1 Image">
                    </td>
                    <td>
                        <h2>Project 2</h2>
                        <img src="path/to/your/image2.jpg" alt="Project 2 Image">
                    </td>
                    <td>
                        <h2>Project 3</h2>
                        <img src="path/to/your/image3.jpg" alt="Project 3 Image">
                    </td>
                </tr>
                <!-- Add more table rows and cells for additional projects -->
            </table>
        </div>
        <div class="category-container" id="web-application">
            <h2>Web Application</h2>
            <table>
                <tr>
                    <td>
                        <h2>Project 4</h2>
                        <img src="path/to/your/image4.jpg" alt="Project 4 Image">
                    </td>
                    <td>
                        <h2>Project 5</h2>
                        <img src="path/to/your/image5.jpg" alt="Project 5 Image">
                    </td>
                    <td>
                        <h2>Project 6</h2>
                        <img src="path/to/your/image6.jpg" alt="Project 6 Image">
                    </td>
                </tr>
                <!-- Add more table rows and cells for additional projects -->
            </table>
        </div>

        <div class="category-container" id="sketch-vr">
            <h2>Sketch/VR Application</h2>
            <table>
                <tr>
                    <td>
                        <h2>Project 7</h2>
                        <img src="path/to/your/image7.jpg" alt="Project 7 Image">
                    </td>
                    <td>
                        <h2>Project 8</h2>
                        <img src="path/to/your/image8.jpg" alt="Project 8 Image">
                    </td>
                    <td>
                        <h2>Project 9</h2>
                        <img src="path/to/your/image9.jpg" alt="Project 9 Image">
                    </td>
                </tr>
                <!-- Add more table rows and cells for additional projects -->
            </table>
        </div>
        <script>
            function showAll() {
                // Show all category containers
                document.querySelectorAll('.category-container').forEach(function (container) {
                    container.style.display = 'block';
                });
            }

            function showCategory(category) {
                // Hide all category containers
                document.querySelectorAll('.category-container').forEach(function (container) {
                    container.style.display = 'none';
                });

                // Show the category container for the selected category
                document.getElementById(category).style.display = 'block';
            }
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <style>
        body {
            background-image: url('background2.png');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        marquee {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        h1 {
            font-size: 40px;
            text-align: center;
            margin: 20px 0;
            text-decoration: underline;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-size: 18px;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button.register-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            width: 100%;
        }
        button.register-btn:hover {
            background-color: #45a049;
        }
        .error {
            color: #FF0001;
            font-size: 14px;
        }
        .registration-status {
            text-align: center;
            font-size: 30px;
            color: black;
        }
        .product-list {
            text-align: center;
            list-style-type: none;
            padding: 0;
        }
        .product-list li {
            display: inline-block;
            margin: 20px;
            text-align: center;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer dt {
            font-size: 30px;
            margin: 10px 0;
        }
        .footer dd {
            font-size: 20px;
            margin: 5px 0;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body onload="window.alert('Page successfully loaded');">
    <marquee>The home of freshly baked desserts and chocolates made from handpicked ingredients</marquee>
    <h1><b>MY ACCOUNT</b></h1>

    <?php
    // Initialize a variable to store registration status
    $registrationStatus = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Getting all values from the HTML form
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $phnum = $_POST['pnum'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Database details
        $host = "localhost";
        $dbUsername = "root"; // Update if different
        $dbPassword = ""; // Update if different
        $dbname = "cordelia"; // Correct database name

        // Creating a connection
        $con = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

        // To ensure that the connection is made
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Using prepared statements to prevent SQL injection
        $stmt = $con->prepare("INSERT INTO customers (firstname, lastname, phnum, email, username, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstname, $lastname, $phnum, $email, $username, $password); // s for string

        // Send query to the database to add values and confirm if successful
        if ($stmt->execute()) {
            $registrationStatus = "Registered successfully!";
        } else {
            $registrationStatus = "Error: " . $stmt->error;
        }

        // Close connection
        $stmt->close();
        mysqli_close($con);
    }

    // Display registration status
    if ($registrationStatus) {
        echo "<div class='registration-status'>$registrationStatus</div>";
    }

    // PHP variables and data types demonstration
    $firstName = "Zehrah"; // string
    $lastName = "Shameer"; // string
    $age = 18; // integer
    $email = "zehrah.shameer@gmail.com"; // string
    $isMember = true; // boolean

    // Using operators
    $welcomeMessage = "Welcome, " . $firstName . " " . $lastName . "!";
    $membershipStatus = $isMember ? "You are a member." : "You are not a member.";

    // Displaying the values
    echo "<div style='text-align:center; font-size:30px; color:black;'>";
    echo "<p>$welcomeMessage</p>";
    echo "<p>Email: $email</p>";
    echo "<p>$membershipStatus</p>";

    // Check membership status using if-else if
    if ($isMember) {
        echo "<p>Thank you for being a valued member! Enjoy your special offers!</p>";
    } elseif (!$isMember && $email) {
        echo "<p>Consider becoming a member to enjoy exclusive benefits!</p>";
    } else {
        echo "<p>Please provide your email to learn more about our membership options.</p>";
    }
    echo "</div>";

    // Product Display
    $product1 = "Red Velvet Cake";
    $product2 = "Tiramisu";

    $price1 = 450; 
    $price2 = 700; 

    $image1 = "redvelvet.jpg";
    $image2 = "tiramisu.jpg";

    // PHP Operators
    $total_price = $price1 + $price2; // Using addition operator

    // Displaying the products using variables
    echo "<h3 style='text-align:center;'>Our Products:</h3>";
    echo "<ul class='product-list'>";
    echo "<li>
        <img src='$image1' alt='$product1' width='200' height='150'/>
        <p>$product1</p>
        <p>Rs. $price1</p>
    </li>";
    echo "<li>
        <img src='$image2' alt='$product2' width='200' height='150'/>
        <p>$product2</p>
        <p>Rs. $price2</p>
    </li>";
    echo "</ul>";

    echo "<h3 style='text-align:center;'>Total Price of Products: Rs. $total_price</h3>";

    // Adding another PHP for loop to display dessert names
    $desserts = ["Chocolate Cake", "Cheesecake", "Mango Mousse", "Brownie", "Fruit Tart"];
    echo "<h3 style='text-align:center;'>Our Desserts:</h3>";
    echo "<ul style='text-align:center;'>";
    foreach ($desserts as $dessert) {
        echo "<li>" . htmlspecialchars($dessert) . "</li>";
    }
    echo "</ul>";

    // End of PHP block
    ?>
    
    <div class="footer">
        <dl>
            <dt>CORDELIA'S CAFE</dt>
            <dd>Don't forget to follow us on Instagram!</dd>
        </dl>
        <p><a href="cordelia_final">Home</a></p>
    </div>
</body>
</html>

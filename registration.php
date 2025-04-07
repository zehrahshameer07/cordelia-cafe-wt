<?php
ob_start(); 
?>

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
            text-align: center;
            margin: 0;
            padding: 20px;
        }
		
        h2 {
            font-size: 32px;
            margin: 20px 0;
            text-decoration: underline;
            color: #daafdf;
        }
        .btn {
            background-color: #f0f0f0;
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin: 10px;
            font-size: 20px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #ddd;
        }
        form {
            font-size: 20px;
            margin: 20px auto;
            width: 350px; /* Made wider */
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .status-message {
            font-size: 20px;
            color: black;
            margin-top: 20px;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        marquee {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .link {
            font-size: 20px;
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }
        .link:hover {
            color: #007BFF;
        }
    </style>
    <script>
        function validateForm() {
            const password = document.getElementById("password").value;
            const password2 = document.getElementById("password2").value;
            const phoneNumber = document.getElementById("pnum").value;

            if (password !== password2) {
                alert("Passwords do not match!");
                return false;
            }

            const phoneRegex = /^\d{10}$/;
            if (!phoneRegex.test(phoneNumber)) {
                alert("Phone number must be exactly 10 digits and contain only numbers!");
                return false;
            }

            return true;
        }

        async function checkUsernameAvailability() {
            const username = document.getElementById("username").value;
            const response = await fetch(check_username.php?username=${username});
            const data = await response.json();

            if (!data.available) {
                alert("Username already exists. Please choose a different username.");
                document.getElementById("username").focus(); 
            }
        }
    </script>
</head>
<body>


    <marquee>The home of freshly baked desserts and chocolates made from handpicked ingredients</marquee>

    <div class="form-container">
        <form method="post" action="" onsubmit="return validateForm()">
            <h2>Register</h2>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="<?php echo isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : ''; ?>" required><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="<?php echo isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : ''; ?>" required><br>
            <label for="pnum">Phone number:</label><br>
            <input type="text" id="pnum" name="pnum" value="<?php echo isset($_POST['pnum']) ? htmlspecialchars($_POST['pnum']) : ''; ?>" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required><br>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required onblur="checkUsernameAvailability()"><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required><br>
            <label for="password2">Re-enter Password:</label><br>
            <input type="password" name="password2" required><br><br>
            <button type="submit" class="btn">Confirm Registration</button>
        </form>

        <form method="post" action="">
            <h2>Delete Account</h2>
            <label for="delete_username">Username:</label><br>
            <input type="text" id="delete_username" name="delete_username" required><br>
            <button type="submit" class="btn" name="delete">Delete</button>
        </form>

        <?php
        $statusMessage = "";

        $host = "localhost";
        $dbUsername = "root"; 
        $dbPassword = "";
        $dbname = "cordelia";

        $con = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['delete'])) {
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $phnum = $_POST['pnum'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $checkStmt = $con->prepare("SELECT * FROM customers WHERE username = ?");
            $checkStmt->bind_param("s", $username);
            $checkStmt->execute();
            $result = $checkStmt->get_result();

            if ($result->num_rows > 0) {
                echo "<div class='status-message'>Username already exists. Please choose a different username.</div>";
            } else {
                $stmt = $con->prepare("INSERT INTO customers (firstname, lastname, phnum, email, username, password) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $firstname, $lastname, $phnum, $email, $username, $password);

                if ($stmt->execute()) {
                 
                    header("Location: cordelia_final.php");
                    exit(); 
                } else {
                    $statusMessage = "Error: " . $stmt->error;
                }
                $stmt->close();
            }
            $checkStmt->close();
        }

        if (isset($_POST['delete'])) {
            $username = $_POST['delete_username'];

            $stmt = $con->prepare("DELETE FROM customers WHERE username = ?");
            $stmt->bind_param("s", $username);

            if ($stmt->execute()) {
                $statusMessage = "Account deleted successfully!";
            } else {
                $statusMessage = "Error: " . $stmt->error;
            }
            $stmt->close();
        }

        mysqli_close($con);

        if ($statusMessage) {
            echo "<div class='status-message'>$statusMessage</div>";
        }
        ?>
    </div>

    <p><a href="cordelia_final.php" class="link">Home</a></p>
</body>
</html>

<?php
ob_end_flush(); 
?>
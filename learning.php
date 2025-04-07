<!DOCTYPE html>
<html>
<head>
    <title>Railway Reservation Form</title>
    <style>
        body { background-color: turquoise; }
        h1 {
            font-size: 40px;
            margin: 20px 0;
            text-decoration: underline;
            text-align: center;
        }
        form {
            font-size: 20px;
            margin: 20px auto;
            width: 500px;
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            width: 100px;
            padding: 8px;
            margin: 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            text-align: center;
            font-size: 18px;
            color: green;
        }
    </style>
    <script>
        function validateForm() {
            let email = document.forms["myForm"]["email"].value;
            let phone = document.forms["myForm"]["phno"].value;
            let password = document.forms["myForm"]["password"].value;
            let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            let phonePattern = /^[0-9]{10}$/;

            if (!emailPattern.test(email)) {
                alert("Please enter a valid email.");
                return false;
            }
            if (!phonePattern.test(phone)) {
                alert("Phone number must be 10 digits.");
                return false;
            }
            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Railway Reservation Form</h1>
    <center>
        <form name="myForm" method="post" action="" onsubmit="return validateForm()">
            <label for="trainno">Enter the train number:</label><br>
            <input type="text" id="trainno" name="trainno" required><br>

            <label for="trainname">Enter the train name:</label><br>
            <input type="text" id="trainname" name="trainname" required><br>

            <label for="rdate">Enter the reservation date:</label><br>
            <input type="date" id="rdate" name="rdate" required><br>

            <label for="name">Enter your name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Enter your email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="phno">Enter your phone number:</label><br>
            <input type="text" id="phno" name="phno" required><br>

            <label for="password">Enter your password:</label><br>
            <input type="password" id="password" name="password" required><br>

            <p>
                <input type="submit" name="submit" value="Submit">
                <input type="submit" name="update" value="Update">
                <input type="submit" name="delete" value="Delete">
            </p>
        </form>
    </center>

    <?php
    $message = "";  // Variable to store the action message

    if (isset($_POST['submit']) || isset($_POST['update']) || isset($_POST['delete'])) {
        $trainno = $_POST['trainno'];
        $trainname = $_POST['trainname'];
        $rdate = $_POST['rdate'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phno = $_POST['phno'];
        $password = $_POST['password'];

        $host = "localhost";
        $username = "root";
        $dbpassword = "";
        $dbname = "sample";

        $con = mysqli_connect($host, $username, $dbpassword, $dbname);

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST['submit'])) {
            $sql = "INSERT INTO railway (trainno, trainname, rdate, name, email, phno, password) VALUES ('$trainno', '$trainname', '$rdate', '$name', '$email', '$phno', '$password')";
            
            if (mysqli_query($con, $sql)) {
                $message = "Details submitted successfully!";
            } else {
                $message = "Error: " . mysqli_error($con);
            }
        } elseif (isset($_POST['update'])) {
            $sql = "UPDATE railway SET trainno='$trainno', trainname='$trainname', rdate='$rdate', name='$name', phno='$phno', password='$password' WHERE email='$email'";
            
            if (mysqli_query($con, $sql)) {
                $message = "Details updated successfully!";
            } else {
                $message = "Error: " . mysqli_error($con);
            }
        } elseif (isset($_POST['delete'])) {
            $sql = "DELETE FROM railway WHERE email='$email'";
            
            if (mysqli_query($con, $sql)) {
                $message = "Details deleted successfully!";
            } else {
                $message = "Error: " . mysqli_error($con);
            }
        }
        mysqli_close($con);
    }

    if ($message) {
        echo "<p class='message'>$message</p>";
    }
    ?>
</body>
</html>

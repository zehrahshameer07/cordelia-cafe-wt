<!DOCTYPE html>
<html>
<head>
    <style>
        .error { color: #FF0001; }
        input { margin-bottom: 10px; }
        label { display: block; margin-top: 10px; }
    </style>
</head>
<body>

<?php
// Initialize error and input variables
$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";
$name = $email = $mobileno = $gender = $website = "";
$agree = false;

// Input fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = input_data($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only alphabets and whitespace are allowed";
        }
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = input_data($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Mobile number validation
    if (empty($_POST["mobileno"])) {
        $mobilenoErr = "Mobile number is required";
    } else {
        $mobileno = input_data($_POST["mobileno"]);
        if (!preg_match("/^[0-9]{10}$/", $mobileno)) {
            $mobilenoErr = "Mobile number must contain exactly 10 digits.";
        }
    }

    // Website validation
    if (!empty($_POST["website"])) {
        $website = input_data($_POST["website"]);
        if (!preg_match("/\b(?:https?|ftp):\/\/[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }

    // Gender validation
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = input_data($_POST["gender"]);
    }

    // Agreement validation
    if (!isset($_POST['agree'])) {
        $agreeErr = "You must accept the terms of service.";
    } else {
        $agree = true; // Just store true if checked
    }
}

// Function to sanitize user input
function input_data($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<h2>Registration Form</h2>
<span class="error">* required field</span>
<br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"></label>
    <span class="error">* <?php echo $nameErr; ?></span>
    
    <label>E-mail: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"></label>
    <span class="error">* <?php echo $emailErr; ?></span>
    
    <label>Mobile No: <input type="text" name="mobileno" value="<?php echo htmlspecialchars($mobileno); ?>"></label>
    <span class="error">* <?php echo $mobilenoErr; ?></span>
    
    <label>Website: <input type="text" name="website" value="<?php echo htmlspecialchars($website); ?>"></label>
    <span class="error"><?php echo $websiteErr; ?></span>
    
    <label>Gender:
        <input type="radio" name="gender" value="male" <?php if($gender == "male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="female" <?php if($gender == "female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="other" <?php if($gender == "other") echo "checked"; ?>> Other
    </label>
    <span class="error">* <?php echo $genderErr; ?></span>
    
    <label>Agree to Terms of Service:
        <input type="checkbox" name="agree" <?php if($agree) echo "checked"; ?>>
    </label>
    <span class="error">* <?php echo $agreeErr; ?></span>
    
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit']) && $nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {
    echo "<h3 style='color: #FF0001'><b>You have successfully registered.</b></h3>";
    echo "<h2>Your Input:</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Mobile No: " . htmlspecialchars($mobileno) . "<br>";
    echo "Website: " . htmlspecialchars($website) . "<br>";
    echo "Gender: " . htmlspecialchars($gender);
} elseif (isset($_POST['submit'])) {
    echo "<h3><b>Please fill out the form correctly.</b></h3>";
}
?>

</body>
</html>

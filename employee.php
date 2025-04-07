<html>
<head>
    <script>
        function validateForm() {
            const empid = document.getElementById("empid").value;
            const name = document.getElementById("name").value;
            const dob = document.getElementById("dob").value;
            const designation = document.getElementById("designation").value;

            // Check if fields are empty
            if (!empid || !name || !dob || !designation) {
                alert("All fields must be filled out!");
                return false;
            }

            // Check if employee ID is a number
            if (isNaN(empid)) {
                alert("Employee ID must be a number!");
                return false;
            }

            // Check if the date of birth makes sense (e.g., user is at least 18 years old)
            const birthDate = new Date(dob);
            const today = new Date();
            const age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            if (age < 18) {
                alert("You must be at least 18 years old!");
                return false;
            }

            return true; // Form is valid
        }
    </script>
</head>
<body bgcolor="turquoise">
<center>
    <form name="myForm" method="post" action="" onsubmit="return validateForm()" style="font-size:30px;">
        <label for="empid">Enter your employee id:</label><br>
        <input type="text" id="empid" name="empid" value=""><br>
        
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name" value=""><br>
        
        <label for="dob">Enter your date of birth:</label><br>
        <input type="date" id="dob" name="dob" value=""><br>
        
        <label for="designation">Enter your designation:</label><br>
        <input type="text" id="designation" name="designation" value=""><br>
		
        <label for="doj">Enter your date of joining:</label><br>
        <input type="date" id="doj" name="doj" value=""><br>
		
        <p>
            <input type="submit" name="submit" value="Submit">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
        </p>
    </form>

<?php

if (isset($_POST['submit']) || isset($_POST['update']) || isset($_POST['delete'])) {
    $empid = $_POST['empid'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $designation = $_POST['designation'];
    $doj = $_POST['doj'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO employee(empid, name, dob, designation, doj) VALUES ('$empid', '$name', '$dob', '$designation', '$doj')";
        
        if (mysqli_query($con, $sql)) {
            echo "New entry added!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } elseif (isset($_POST['update'])) {
        $sql = "UPDATE employee SET name='$name', dob='$dob', designation='$designation' WHERE empid='$empid'";
        if (mysqli_query($con, $sql)) {
            echo "Entry updated!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } elseif (isset($_POST['delete'])) {
        $sql = "DELETE FROM employee WHERE empid='$empid'";
        
        if (mysqli_query($con, $sql)) {
            echo "Entry deleted!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
    mysqli_close($con);
}
?>
</center>
</body>
</html>

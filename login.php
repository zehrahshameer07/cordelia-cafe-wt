<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            background-image: url('background2.png');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .sidebar {
            width: 350px;
            height: 90%; 
            background-color:white;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin: 20px;
            flex-shrink: 0;
            overflow-y: auto; 
        }
        .sidebar h2 {
            font-size: 1.8em;
            color: #daafdf; /* Updated color */
            margin-bottom: 10px;
        }
        .sidebar p {
            font-size: 1.2em;
            color: #333;
            margin: 5px 0;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        h1 {
            font-size: 3em;
            margin: 20px 0;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            text-align: center;
        }
        .login-btn {
            background-color: #daafdf;
            border: none;
            color: white;
            padding: 15px 30px;
            cursor: pointer;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%; 
        }
        .login-btn:hover {
            background-color: #3700b3;
            transform: scale(1.05);
        }
        form {
            font-size: 1.2em;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            max-width: 400px;
            width: 100%;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
        }
        input:focus {
            border: 2px solid #6200ea;
            outline: none;
        }
        .status-message {
            font-size: 1.2em;
            color: black;
            margin-top: 20px;
            text-align: center;
        }
        a {
            font-size: 1.2em;
            color: #6200ea;
            text-decoration: none;
            margin-top: 20px;
            transition: color 0.3s;
            text-align: center;
        }
        a:hover {
            color: #3700b3;
            text-decoration: underline;
        }
        .register-message {
            font-size: 1.2em;
            margin-top: 20px;
            color: black;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Latest Announcements</h2>
		<p></p>
        <p>🍰 New flavors of cakes available this week!</p>
        <p>🍫 Join us for a chocolate tasting event this Saturday!</p>
        <p>🎉 Special discounts for first-time visitors!</p>
        <p>📅 Mark your calendars for our upcoming baking class!</p>
        <p>📣 Check out our new online ordering system!</p>
        <p>🍪 Don't miss our cookie cake decorating workshop!</p>
        <p>🎂 Celebrate your birthday with us—special offers available!</p>
    </div>

    <div class="content">
        <marquee style="color:#daafdf ; font-size: 2.0em; margin-bottom: 20px;"><b>The home of freshly baked desserts and chocolates made from handpicked ingredients</b></marquee>
        <h1> Login</h1>

        <form id="loginForm" method="get" action="cordelia_final.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>

        <div class="status-message" id="statusMessage">
            <?php
           
            if (isset($_GET['username'])) {
                echo "Welcome, " . htmlspecialchars($_GET['username']) . "!";
            }
            ?>
        </div>

        <p class="register-message">New user? <a href="registration.php">Click here to register.</a></p>

        <p><a href="cordelia_final.php">Home</a></p>
    </div>
</body>
</html>

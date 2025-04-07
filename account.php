<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <style>
        body {
            background-image: url('background2.png');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .user-info {
            margin: 10px 0;
            font-size: 1.1em;
        }
        .logout-btn {
            background-color: #daafdf;
            border: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .logout-btn:hover {
            background-color: #3700b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Account Overview</h1>
        <div class="user-info">
            <p><strong>Username:</strong> 2441663</p>
            <p><strong>Email:</strong> zehrah@gmail.com</p>
            <p><strong>Join Date:</strong> October 31,2024</p>
        </div>
        <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>

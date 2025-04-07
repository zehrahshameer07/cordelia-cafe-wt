<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celebration Cakes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: url("background2.png") no-repeat center center fixed;
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #fad6ed;
            width: 100%;
            padding: 10px 0;
            text-align: center;
        }
        .topnav {
            font-size: 28px;
        }
        .topnav a {
            margin: 0 20px;
            text-decoration: none;
            color: white;
        }
        h1 {
            font-size: 60px;
            text-align: center;
            text-decoration: underline;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }
        .product {
            background-color: #dfc6e2;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }
        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .cart {
            margin-top: 20px;
            background-color: #fad6ed;
            padding: 10px;
            border: 1px solid #d24eef;
            display: none;
        }
        .footer-table {
            width: 80%;
            margin: 20px auto;
            background-color: #dfc6e2;
            font-size: 30px;
            border-collapse: collapse;
        }
        .footer-table th {
            background-color: #fad6ed;
            padding: 10px;
        }
        .footer-table td {
            padding: 10px;
        }
        dl {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <marquee>The home of freshly baked desserts and chocolates made from handpicked ingredients</marquee>
        <div class="topnav">
            <a href="cordelia's.html"><b>Home</b></a>
            <a href="chocolates.html"><b>Chocolates</b></a>
            <a href="signature_cakes.html"><b>Cakes</b></a>
            <a href="hampers.html"><b>Hampers</b></a>
        </div>
    </div>

    <h1>CELEBRATION CAKES</h1>
    <div class="product-grid">
       
        <div class="product">
            <img src="kids_birthday_cake.jpg" alt="Kids Birthday Cake">
            <h3>Kids Birthday Cake</h3>
            <button onclick="addToCart('Kids Birthday Cake')">Add to Cart</button>
        </div>
       
        <div class="product">
            <img src="theme_cake.jpg" alt="Theme Cake">
            <h3>Theme Cakes</h3>
            <button onclick="addToCart('Theme Cakes')">Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="speciality_cake.jpg" alt="Speciality Cake">
            <h3>Speciality Cakes</h3>
            <button onclick="addToCart('Speciality Cakes')">Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="customised_cake.jpg" alt="Customised Cake">
            <h3>Customised Cakes</h3>
            <button onclick="addToCart('Customised Cakes')">Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="premium_cake.jpg" alt="Premium Cake">
            <h3>Premium Cakes</h3>
            <button onclick="addToCart('Premium Cakes')">Add to Cart</button>
        </div>
    </div>

    <div class="cart" id="cart">
        <h2>Your Cart:</h2>
        <ul id="cartItems"></ul>
    </div>

    <p><a href="cordelia's.html">Home</a></p>
    <hr size="2" color="#fe5cd2" noshade>

    <table class="footer-table">
        <tr>
            <th>My Account</th>
            <th>Quick Links</th>
            <th>Discover</th>
        </tr>
        <tr>
            <td>My Account</a></td>
            <td>FAQs</td>
            <td>About Us</td>
        </tr>
        <tr>
            <td>Order History</td>
            <td>Terms and Conditions</td>
            <td>Careers</td>
        </tr>
        <tr>
            <td>Delivery Information</td>
            <td>Privacy Policy</td>
            <td>Contact Us</td>
        </tr>
    </table>

    <dl>
        <dt style="font-size:30px;">CORDELIA'S CAFE</dt>
        <dd style="font-size:20px;">Don't forget to follow us on Instagram!</dd>
    </dl>

    <script>
        const cartItems = [];

        function addToCart(product) {
            cartItems.push(product);
            document.getElementById('cart').style.display = 'block';
            document.getElementById('cartItems').innerHTML = cartItems.map(item => `<li>${item}</li>`).join('');
        }
    </script>
</body>
</html>

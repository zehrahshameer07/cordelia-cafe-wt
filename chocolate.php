<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chocolates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: url("background2.png") no-repeat center center fixed;
            background-size: cover;
        }
        .header {
            background-color: #fad6ed;
            padding: 8px;
            text-align: center;
        }
        .topnav {
            overflow: hidden;
            background-color: #333;
            font-size: 25px;
        }
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 17px 20px;
            text-decoration: none;
        }
        .topnav a:hover {
            background-color: #fad6ed;
            color: black;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }
        .product {
            background-color: #f4e2f6;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .cart {
            margin-top: 20px;
            background-color: #fad6ed;
            padding: 10px;
            border: 1px solid #d24eef;
            display: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>CORDELIA'S CAFE</h1>
    </div>
    <marquee>The home of freshly baked desserts and chocolates made from handpicked ingredients</marquee>
    
    <div class="topnav">
        <a href="cordelia's.html">Home</a>
        <a href="chocolates.html">Chocolates</a>
        <a href="celebration cakes.html">Celebration Cakes</a>
        <a href="hampers.html">Hampers</a>
    </div>

    <div>
        <center>
            <h1 style="font-size:50px;"><b><u>CHOCOLATES</u></b></h1>
        </center>

        <div class="product-grid">
    
            <div class="product">
                <h3>Assorted Chocolates</h3>
                <img src="product1.jpg" alt="Assorted Chocolates">
                <button onclick="addToCart('Assorted Chocolates')">Add to Cart</button>
            </div>
            
            <div class="product">
                <h3>Speciality Dark Chocolate</h3>
                <img src="product2.jpg" alt="Speciality Dark Chocolate">
                <button onclick="addToCart('Speciality Dark Chocolate')">Add to Cart</button>
            </div>
            
            <div class="product">
                <h3>Speciality Milk Chocolate</h3>
                <img src="product3.jpg" alt="Speciality Milk Chocolate">
                <button onclick="addToCart('Speciality Milk Chocolate')">Add to Cart</button>
            </div>
            
            <div class="product">
                <h3>Speciality White Chocolate</h3>
                <img src="product4.jpg" alt="Speciality White Chocolate">
                <button onclick="addToCart('Speciality White Chocolate')">Add to Cart</button>
            </div>
           
            <div class="product">
                <h3>Premium Chocolate</h3>
                <img src="product5.jpg" alt="Premium Chocolate">
                <button onclick="addToCart('Premium Chocolate')">Add to Cart</button>
            </div>
           
            <div class="product">
                <h3>Gourmet Chocolate</h3>
                <img src="product6.jpg" alt="Gourmet Chocolate">
                <button onclick="addToCart('Gourmet Chocolate')">Add to Cart</button>
            </div>
            
            <div class="product">
                <h3>Chocolate Truffles</h3>
                <img src="product7.jpg" alt="Chocolate Truffles">
                <button onclick="addToCart('Chocolate Truffles')">Add to Cart</button>
            </div>
            
            <div class="product">
                <h3>Cocoa Nibs</h3>
                <img src="product8.jpg" alt="Cocoa Nibs">
                <button onclick="addToCart('Cocoa Nibs')">Add to Cart</button>
            </div>
         
            <div class="product">
                <h3>Chocolate Bars</h3>
                <img src="product9.jpg" alt="Chocolate Bars">
                <button onclick="addToCart('Chocolate Bars')">Add to Cart</button>
            </div>
        </div>

        <div class="cart" id="cart">
            <h2>Your Cart:</h2>
            <ul id="cartItems"></ul>
        </div>

        <p><a href="cordelia_final.php">Home</a></p>
        <hr width="100%" size="2" color="#fe5cd2" noshade>
    </div>

    <script>
        const cartItems = [];

        function addToCart(product) {
            cartItems.push(product);
            document.getElementById('cart').style.display = 'block';
            document.getElementById('cartItems').innerHTML = cartItems.map(item => `<li>${item}</li>`).join('');
        }
    </script>

    <table align="center" width="80%" height="40%" style="background-color:#dfc6e2; font-size:30px;">
        <tr style="background-color: #fad6ed;">
            <th>My Account</th>
            <th>Quick Links</th>
            <th>Discover</th>
        </tr>
        <tr>
            <td>My Account</a></td>
            <td>FAQs</td>
            <td>About us</td>
        </tr>
        <tr>
            <td>Order History</td>
            <td>Terms and Conditions</td>
            <td>Careers</td>
        </tr>
        <tr>
            <td>Delivery Information</td>
            <td>Privacy Policy</td>
            <td>Contact us</td>
        </tr>
    </table>
    
    <dl>
        <dt align="center" style="font-size:30px;">CORDELIA'S CAFE</dt>
        <dd align="center" style="font-size:20px;">Don't forget to follow us on Instagram!</dd>
    </dl>
</body>
</html>

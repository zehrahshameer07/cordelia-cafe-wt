<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hampers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: url("background2.png") no-repeat center center fixed;
            background-size: cover;
        }
        .header {
            background-color: #fad6ed;
            width: 100%;
            padding: 20px;
            text-align: center;
        }
        .topnav {
            margin: 10px 0;
        }
        .topnav a {
            font-size: 28px;
            color: #333;
            text-decoration: none;
            margin: 0 20px;
        }
        .topnav a:hover {
            color: #d24eef;
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
    </style>
</head>
<body>
    <div class="header">
        <h1>CORDELIA'S CAFE</h1>
        <div class="topnav">
            <a href="cordelia's.html"><b>Home</b></a>
            <a href="chocolates.html"><b>Chocolates</b></a>
            <a href="signature_cakes.html"><b>Cakes</b></a>
            <a href="hampers.html"><b>Hampers</b></a>
        </div>
    </div>

    <center>
        <h1 style="font-size:60px;"><b><u>HAMPERS</u></b></h1>
    </center>

    <div class="product-grid">
       
        <div class="product">
            <img src="birthday_hamper.jpg" alt="Birthday Hamper">
            <h3>Birthday Hamper</h3>
            <button onclick="addToCart('Birthday Hamper')">Add to Cart</button>
        </div>
       
        <div class="product">
            <img src="special_hamper.jpg" alt="Special Hamper">
            <h3>Special Hamper</h3>
            <button onclick="addToCart('Special Hamper')">Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="party_hamper.jpg" alt="Party Hamper">
            <h3>Party Hamper</h3>
            <button onclick="addToCart('Party Hamper')">Add to Cart</button>
        </div>
       
        <div class="product">
            <img src="customized_hamper.jpg" alt="Customized Hamper">
            <h3>Customized Hamper</h3>
            <button onclick="addToCart('Customized Hamper')">Add to Cart</button>
        </div>
       
        <div class="product">
            <img src="premium_hamper.jpg" alt="Premium Hamper">
            <h3>Premium Hamper</h3>
            <button onclick="addToCart('Premium Hamper')">Add to Cart</button>
        </div>
        <div class="product">
            <img src="gourmet_.jpg" alt="Gourmet Hamper">
            <h3>Gourmet Hamper</h3>
            <button onclick="addToCart('Gourmet Hamper')">Add to Cart</button>
        </div>
    </div>

    <div class="cart" id="cart">
        <h2>Your Cart:</h2>
        <ul id="cartItems"></ul>
    </div>

    <p><a href="cordelia's.html">Home</a></p>
    <hr width="100%" size="2" color="#fe5cd2" noshade>

    <table align="center" width="80%" height="40%" style="background-color:#dfc6e2; font-size:30px;">
        <tr style="background-color: #fad6ed;">
            <th>My Account</th>
            <th>Quick Links</th>
            <th>Discover</th>
        </tr>
        <tr>
            <td><My Account</a></td>
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

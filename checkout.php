<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Cordelia's Cafe</title>
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
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .checkout-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #d24eef;
            margin-bottom: 20px;
        }
        .item {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }
        .total {
            font-weight: bold;
            font-size: 1.2em;
            margin-top: 20px;
            text-align: right;
        }
        .payment-method, .address {
            margin-top: 20px;
        }
        .checkout-btn {
            background-color: #d24eef;
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s;
            width: 100%;
        }
        .checkout-btn:hover {
            background-color: #3700b3;
        }
        .confirmation {
            display: none;
            margin-top: 20px;
            text-align: center;
            font-size: 1.2em;
            color: green;
        }
    </style>
</head>
<body>

    <div class="checkout-container">
        <h1>Checkout</h1>
        <div class="item">
            <span>Special Hamper</span>
            <span>₹ 1,500</span>
        </div>
        <div class="item">
            <span>Premium Chocolate</span>
            <span>₹ 1,000</span>
        </div>
        <div class="item">
            <span>Theme Cakes</span>
            <span>₹ 1,800</span>
        </div>
        <div class="total">Total: ₹ 4,300</div>

        <div class="address">
            <label for="address">Shipping Address:</label>
            <input type="text" id="address" placeholder="Enter your address" required>
        </div>

        <div class="payment-method">
            <label for="payment">Payment Method:</label>
            <select id="payment">
                <option value="credit-card">Credit/Debit Card</option>
                <option value="paypal">PayPal</option>
                <option value="net-banking">Net Banking</option>
            </select>
            <div id="payment-details" style="margin-top: 10px;">
                <p><strong>Enter Payment Details:</strong></p>
                <div>
                    <label for="card-number">Card Number:</label>
                    <input type="text" id="card-number" placeholder="1234 5678 9012 3456" required>
                </div>
                <div>
                    <label for="expiry-date">Expiry Date:</label>
                    <input type="text" id="expiry-date" placeholder="MM/YY" required>
                </div>
            </div>
        </div>

        <button class="checkout-btn" onclick="confirmPurchase()">Confirm Purchase</button>
        <div class="confirmation" id="confirmation-message">Order Confirmed!</div>
    </div>

    <script>
        function confirmPurchase() {
            // Get the address input value
            const address = document.getElementById('address').value;
            if (address) {
                // Show confirmation message
                document.getElementById('confirmation-message').style.display = 'block';
            } else {
                alert('Please enter your shipping address.');
            }
        }
    </script>

</body>
</html>

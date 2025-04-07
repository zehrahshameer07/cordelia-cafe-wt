<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cordelia's Cafe</title>
    <link rel="stylesheet" href="style.css" media="all"/>
    <style>
        button {
            color: #d24eef;
            width: 30%;
            padding: 10px;
            font-size: 25px;
        }
        h2 {
            color: black ;
        }
        .column {
            float: left;
            width: 20%;
            padding: 15px;
        }
        .row::after {
            content: "";
            display: table;
            clear: both;
        }
        @media screen and (max-width:600px) {
            .column {
                width: 100%;
            }
        }
        a:link {
            color: purple;
        }
        a:visited {
            color: #ae73bb;
        }
        a:hover {
            color: white;
        }
        a:active {
            color: #d24eef;
        }
        .upper-roman {
            list-style-type: upper-roman;
        }
        ol {
            list-style-position: inside;
        }
        ul {
            list-style: none; 
            padding: 0;
        }
        li {
            margin: 10px 0;
            font-size: 18px;
        }
        .icon {
            width: 30px; 
            height: 30px; 
            margin-right: 8px;
            vertical-align: middle; 
        }
        .container {
            position: relative;
            text-align: center;
            color: #F0F0F0;
        }
        .bottom-right {
            position: absolute;
            top: 20px;
            bottom: 8px;
            right: 130px;
            left: 250px;
            width:60%;
            background: rgba(150, 15, 19, 0.3);
            text-align: center;
        }
        .google-map {
            width: 100%;
            height: 400px; /* Set a fixed height */
            position: relative;
        }
        .google-map iframe {
            border: 0;
            height: 100%;
            width: 100%;
        }
        .profile-cart {
            float: right;
            margin: 10px;
        }
		
		.offer-container {
        background-color: #fad6ed;
        padding: 20px;
        margin: 20px auto;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        max-width: 600px;
    }
    .offer-title {
        font-size: 30px;
        color: #d24eef;
        margin-bottom: 10px;
    }
    .offer-text {
        font-size: 20px;
        color: #333;
        margin-bottom: 20px;
    }
    .discount-section {
        margin: 20px 0;
    }
    .discount-button, .offer-button {
        color: #d24eef;
        padding: 10px 20px;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        background-color: #f0e1f3;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .discount-button:hover, .offer-button:hover {
        background-color: #d24eef;
        color: white;
    }
	
	

		
    </style>
</head>
<body background="background2.png" style="background-size: cover; background-repeat: no-repeat; width:100%;">
    <marquee style="color: white; font-size: 25px;"><b>The home of freshly baked desserts and chocolates made from handpicked ingredients</b></marquee>
    
    <div style="background-color:#fad6ed; width:100%; height:8%; float:left;">
        <table align="center" width="90%">
            <tr>
                <td rowspan=4></td>
            </tr>
            <tr>
                <td style="font-size: 28px; font-family:aldhabi;" align="left">
                    <a href="cordelia_final.php"><b>Home</b></a>
                </td>
                <td align="center" style="font-size: 28px; font-family:aldhabi;">
                    <a href="hampers.php"><b>Hampers</b></a>
                </td> 
                <td align="center" style="font-size: 28px; font-family:aldhabi;">
                    <a href="chocolate.php"><b>Chocolates</b></a>
                </td> 
                <td align="center" style="font-size: 28px; font-family:aldhabi;">
                    <a href="celebration cakes.php"><b>Celebration Cakes</b></a>
                </td>
               <td class="profile-cart">
                <a href="account.php">
                    <img src="profile.png" alt="Profile" class="icon">
                </a>
				<a href="checkout.php">
                    <img src="cart.png" alt="Cart" class="icon">
					</a>
                </td>
            </tr>
        </table>
		
    </div>

    <div>
	<br></br>
    <center>
        <h1 style="font-family: 'Bahnschrift SemiBold'; font-size: 60px; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            <b>CORDELIA'S CAFE</b>
        </h1>
        <div class="container">
            <img src="pastry.jpg" alt="Pastry" width="80%" height="10%">
            <div class="bottom-right"> 
                <p align="center" style="font-size: 40px; font-family: Bahnschrift SemiBold; color: white;"> 
                   CONFECTIONS MADE TO PERFECTION <br>
                    INDULGE IN OUR COLLECTION OF PASTRIES
                </p>
            </div>
        </div>
    </center>
</div>

<tr>
    <td colspan="2">
       
            <h2 style="font-size: 30px; text-align: center; color: black">OUR STORY</h2>
            <div style="display: flex; align-items: flex-start; justify-content: center; margin: 20px 0;">
                <div style="flex: 1; max-width: 600px; padding: 20px;">
                    <p style="font-size: 20px; text-align: justify; color: #333;">
                        <i>The story of Cordelia's Cafe is not just another story. It’s a true story. A story of true couverture chocolates made from true ingredients. This means, each of the ingredients is authentic and has been brought to the table after being made and approved by master chocolatiers from around the world.</i>
                    </p>
                    <ol class="upper-roman" style="font-size: 20px; padding-left: 20px; color: #333;">
                        <li><i>Naturally sourced ingredients</i></li>
                        <li><i>Freshly made</i></li>
                        <li><i>Delicious</i></li>
                    </ol>
                </div>
                <div class="column" style="flex: 0 0 250px; text-align: center; padding: 20px;">
                    <img src="founder.jpg" alt="Founder" width="250" height="200" style="border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); margin-bottom: 20px;">
                    <h3 style="color: #d24eef;">Founder</h3>
                    <p style="font-size: 18px; color: #333;">Nara Smith</p>
                </div>
            </div>
        </div>
    </td>
</tr>




<table align="center" width="90%" height="60%">
    
        <tr>
            <td colspan="2">
                <hr width="100%" size="2" color="#fe5cd2" noshade>
            </td>
        </tr>
        <tr>
            <td align="center">
                <img src="signature cake.jpg" width="350" height="350">
            </td>
            <td align="center">
                <img src="chocolate2.jpg" width="350" height="350">
            </td>
        </tr>
        <tr style="font-size: 35px; font-family:Bahnschrift SemiBold;">
            <td align="center">
                <a href="signature cakes.php">Signature Cakes</a>
            </td>
            <td align="center">
                <a href="chocolate.php">Chocolates</a>
            </td> 
        </tr>
        <tr>
            <td align="center">
                <br><br>
                <img src="celebcakes.jpg" width="350" height="350">
            </td>
            <td align="center">
                <br><br>
                <img src="hamper2.jpg" width="350" height="350">
            </td>
        </tr>
        <tr style="font-size: 35px; font-family:Bahnschrift SemiBold">
            <td align="center">
                <a href="celebration cakes.php">Celebration Cakes</a>
            </td>
            <td align="center">
                <a href="hampers.php">Hampers</a>
            </td>
        </tr>
    </table>
	
	<div class="offer-container">
    <div class="offer-title">Today's Special Offer!</div>
    <div class="offer-text" id="offer"></div>
    
    <div class="discount-section">
        <p style="font-family:Aldhabi; font-size:25px;">Wanna get discount on your favorite items!?</p>
        <button class="discount-button" type="button" onclick="myFunction()">Click Me!</button>
        <p id="demo" style="font-family:Aldhabi; font-size:20px; color:black;"></p>
    </div>
    
    <p style="font-family:Aldhabi; font-size:25px; text-align:center;">Click the button to display the special offer for today.</p>
    <button class="offer-button" onclick="showOffer()">Try it</button>
</div>

<script>
    function myFunction() {
        document.getElementById("demo").innerHTML = "Use code: GHR@12, ICE87, NYT@30";
    }

    function showOffer() {
        var offer;
        var dayName;
        switch (new Date().getDay()) {
            case 0: dayName = "Sunday"; offer = "20% off on all items!"; break;
            case 1: dayName = "Monday"; offer = "Buy one get one free on selected items!"; break;
            case 2: dayName = "Tuesday"; offer = "15% off on hampers!"; break;
            case 3: dayName = "Wednesday"; offer = "Free delivery on orders over 500!"; break;
            case 4: dayName = "Thursday"; offer = "10% off on all chocolates"; break;
            case 5: dayName = "Friday"; offer = "Special weekend deals starting now!"; break;
            case 6: dayName = "Saturday"; offer = "25% off on cakes"; break;
            default: dayName = "Unknown Day"; offer = "No special offers today.";
        }
        document.getElementById("offer").innerHTML = "Today is " + dayName + ". Special Offer: " + offer;
    }
</script>



    <hr width="100%" size="2" color="#fe5cd2" noshade>
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <hr width="100%" size="2" color="#fe5cd2" noshade>
	 
    
    <a href="myaccount.html"><img src="artisnal.jpg" width="1350" height="300" align="center"></a>
    
    <div class="row">
        <div class="column" style="font-size: 20px; font-family:Bahnschrift SemiBold;">
            <h2 style="color:#ae73bb">User Reviews</h2>
            <p style="color:#ae73bb"><b>Great cafe for a snack. The ginger slice is to die for! Friendly service, with a great selection of cabinet food. Inside and outside seating. Great place to stop when traveling between Christchurch and Picton. Great service, friendly and engaged staff.</b></p>
        </div>
        <div class="column" style="font-size: 20px; font-family:Bahnschrift SemiBold;">
            <h2 style="color:#ae73bb">General Feedback</h2>
            <p style="color:#ae73bb">Nice cafe. Been here various times. We stop every time we drive North. Good food, nice atmosphere and on all occasions save yesterday, staff hospitality is good too. Welsh waitress there consistent - very nice and friendly every time we visit.</p>
        </div>
		<div class="column" style="font-size: 20px; font-family:Bahnschrift SemiBold;">
            <h2 style="color:#ae73bb"><b>Critique Feedback</b></h2>
            <p style="color:#ae73bb"><b>Great coffee and a wide variety of cabinet food. Inside and outside seating. Great place to stop when traveling between Christchurch and Picton. Great service, friendly and engaged staff.</b></p>
        </div>
    </div>

    <hr width="100%" size="2" color="#fe5cd2" noshade>
   

    
   

    
    <div style="text-align: center;">
        <p style="font-family:Aldhabi; font-size:25px;">Find out if a Cordelia's store is near you!</p>
        <div class="input-group">
            <label for="cityInput" style="font-family:Aldhabi; font-size:25px;">Enter City Name:</label>
            <input type="text" id="cityInput" placeholder="e.g., Bangalore">
            <button style="font-family:Aldhabi; font-size:20px;" onclick="checkCity()">Check Availability</button>
        </div>
        <p id="cityResult" class="result"></p>
    </div>

    <script>
        function checkCity() {
            const cityInput = document.getElementById('cityInput').value.trim();
            const cityName = cityInput.toLowerCase();
            const availableCities = ["bangalore", "kochi", "chennai"];
            let message;
            if (availableCities.includes(cityName)) {
                message = "Available in your city";
            } else {
                message = "Sorry, not available";
            }
            const resultElement = document.getElementById('cityResult');
            resultElement.textContent = message;
        }

        function showDiscount() {
            document.getElementById("discountMessage").textContent = "GHR@12, ICE87, NYT@30";
        }

        const images = ["pastry1.jpg", "pastry2.jpg", "pastry3.jpg"]; 
        let currentImageIndex = 0;

        function changeImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            document.getElementById("mainImage").src = images[currentImageIndex];
        }

        setInterval(changeImage, 3000); 
    </script>

    <div>
        <ul style="font-family:Aldhabi; font-size:20px;">
            <li>
                <img src="icon.png" alt="Store Information No. 788, J.K. Plaza, 12th Main Rd, Indiranagar, Bengaluru, Karnataka 560038, India" class="icon">
                Store Information No. 788, J.K. Plaza, 12th Main Rd, Indiranagar, Bengaluru, Karnataka 560038, India
            </li>
            <li>
                <img src="icon.png" alt="Hours of Operation Mon.-Sun.: 11AM – 11PM" class="icon">
                Hours of Operation Mon.-Sun.: 11AM – 11PM
            </li>
            <li>
                <img src="icon.png" alt="Contact Number: xxxxxxxxxx" class="icon">
                Contact Number: xxxxxxxxxx
            </li>
        </ul>
    </div>
	
	<table align="center" width="80%" height="40%" style="background-color:#dfc6e2; font-size:30px; font-family:Aldhabi;">
        <tr style="background-color: #fad6ed;">
            <th>My Account</th>
            <th>Quick Links</th>
            <th>Discover</th>
        </tr>
        <tr>
            <td>My Account</td> 
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


    <hr width="100%" size="2" color="#fe5cd2" noshade>
</body>
</html>

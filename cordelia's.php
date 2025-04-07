<!DOCTYPE html>
<html>
<head>
    <title>Cordelia's</title>
    <link rel="stylesheet" href="style.css" media="all"/>
    <style>
        /* Your existing styles here */
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body background="background2.png" style="background-size: cover; background-repeat: no-repeat; width:100%;">
<marquee>the home of freshly baked desserts and chocolates made from handpicked ingredients</marquee>

<div style="background-color:#fad6ed; width:100%; height:8%; float:left;">
    <table align="center" width="90%">
        <tr>
            <td rowspan=4></td>
        </tr>
        <tr>
            <td style="font-size: 28px; font-family:aldhabi;" align="left"><a href="cordelia's.html"><b> home</b></a></td>
            <td align="center" style="font-size: 28px; font-family:aldhabi;"><a href="chocolates.html"> <b>chocolates</b></a></td>
            <td align="center" style="font-size: 28px; font-family:aldhabi;"><a href="signature cakes.html"> <b>cakes</b></a></td>
            <td align="center" style="font-size: 28px; font-family:aldhabi;"><a href="hampers.html"><b> hampers</b></a></td>
        </tr>
    </table>
</div>

<br>

<div>
    <center>
        <h1 style="font-family:Bahnschrift SemiBold"><b>CORDELIA'S CAFE</b></h1>
        <div class="container">
            <img src="pastry.jpg" alt="snow" width="90%" height="60%">
            <div class="bottom-right">
                <p align="center" style="font-size: 40px; font-family:Bahnschrift SemiBold; color:#ae73bb;">
                    CONFECTIONS MADE TO PERFECTION <br>
                    INDULGE IN OUR COLLECTION OF PASTRIES
                </p>
            </div>
        </div>
    </center>
</div>

<table align="center" width="90%" height="60%">
    <tr>
        <td colspan=2>
            <hr width="100%" size="2" color="#fe5cd2" noshade>
            <h2 style="font-size:40px;"><i>OUR STORY:</i></h2>
            <p style="font-size:30px;"><i>The story of Cordelia's Cafe is not just another story...</i></p>
            <ol class="upper-roman" style="font-size:30px;">
                <li style="font-size:30px;"><i>naturally sourced ingredients</i></li>
                <li style="font-size:30px;"><i>freshly made</i></li>
                <li style="font-size:30px;"><i>delicious</i></li>
            </ol>
            <hr width="100%" size="2" color="#fe5cd2" noshade>
        </td>
    </tr>

    <!-- Dynamic Pastry List -->
    <tr>
        <td colspan=2 align="center">
            <h2>Our Pastries</h2>
            <?php
            // Sample array of pastries
            $pastries = [
                ['name' => 'Croissant', 'price' => 2.50],
                ['name' => 'Éclair', 'price' => 3.00],
                ['name' => 'Macaron', 'price' => 1.50],
                ['name' => 'Tart', 'price' => 4.00],
                ['name' => 'Mille-feuille', 'price' => 3.50],
            ];

            echo '<ul style="font-size: 20px;">';
            foreach ($pastries as $pastry) {
                echo '<li>' . htmlspecialchars($pastry['name']) . ' - $' . number_format($pastry['price'], 2) . '</li>';
            }
            echo '</ul>';
            ?>
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
        <td align="center"><a href="signature cakes.html"> Signature Cakes</a></td>
        <td align="center"><a href="chocolates.html"> Chocolates</a></td>
    </tr>

    <!-- Remaining content -->
    <tr>
        <td align="center"><br><br><img src="celebcakes.jpg" width="350" height="350"></td>
        <td align="center"><br><br><img src="hamper2.jpg" width="350" height="350"></td>
    </tr>
    <tr style="font-size: 35px; font-family:Bahnschrift SemiBold">
        <td align="center"><a href="celebration cakes.html"> Celebration Cakes</a></td>
        <td align="center"><a href="hampers.html"> Hampers</a></td>
    </tr>
</table>

<hr width="100%" size="2" color="#fe5cd2" noshade>
<!-- Continue with the rest of your HTML as is -->

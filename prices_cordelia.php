<?php
$product1 = "Red Velvet Cake";
$product2 = "Tiramisu";

$price1 = 899; 
$price2 = 1299; 

$image1 = "redvelvet.jpg";
$image2 = "tiramisu.jpg";

// PHP Operators
$total_price = $price1 + $price2; // Using addition operator

// Displaying the products using variables
echo "<li>
<img src='$image1' alt='$product1' width='200' height='150'/>
<a href='cordelia.php'>$product1</a>
<p>Rs. $price1</p>
</li>";

echo "<li>
<img src='$image2' alt='$product2' width='200' height='150'/>
<a href=''>$product2</a>
<p>Rs. $price2</p>
</li>";

echo "<h3>Total Price of Products: Rs. $total_price</h3>";
?>

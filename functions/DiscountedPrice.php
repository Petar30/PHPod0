<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body><!--
    <h1>1) Make a function getDiscountedPrice()
        2) Pass Price and Discount percentage
        3) Return the discountedPrice
        Formula:
        discounted_price = original_price - ( (original_price * discount) / 100 )</h1> -->
    <h2>Zadatak</h2> 
<?php
    function getDiscountedPrice(int $price, int $discount_percentage){
        $discounted_price = $price - ( ($price * $discount_percentage) / 100);
        return $discounted_price;
    }
    $cijena= getDiscountedPrice(899, 20);
    echo "cijena produkta je: " . $cijena . "<br>";
?>
</body>
</html>
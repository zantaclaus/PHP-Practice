<?php
    $name = "Zantaclaus";
    echo "Name: ".$name."<br><br>";

    $price = 100;
    echo "Price = ".number_format($price,2)." Bath"."<br>";
   
    $discount = 10;
    echo "Discount = ".$discount." %<br>";

    $priceDis = ($price*$discount)/100;
    echo "Price Discount = ".number_format($priceDis, 2)." Bath<br>";

    $total = $price - $priceDis;
    echo "Total = ".number_format($total,2)." Bath"
?>
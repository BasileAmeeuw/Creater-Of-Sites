<?php 
function totalPrice($priceProduct)
{
    $price=0;
    for ($i=0;$i<count($priceProduct);$i++)
    {
        $price+=$priceProduct[$i];
    }
    return $price;
}


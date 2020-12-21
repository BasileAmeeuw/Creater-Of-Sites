<?php 
class CommandManager
{
    public function totalPrice($priceProduct)
    {
        if (is_array($priceProduct)) {
            $price=0;
            for ($i=0;$i<count($priceProduct);$i++)
            {
                $price+=$priceProduct[$i];
            }
        } else {
            $price="ERROR";
        }
        return $price;
    }
}



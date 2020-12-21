<?php 
/*
class CommandManager manages the methods about the command typically the addition of the prices to have a final total.
*/
class CommandManager
{
    /*
    function totalPrice make the sum of all prices of products in the command.
    */
    public function totalPrice($priceProduct)
    {
        if (is_array($priceProduct)) {
            $price=0;
            for ($i=0;$i<count($priceProduct);$i++)
            {
                $price+=$priceProduct[$i];
            }
        } else {
            throw new Exception("Erreur dans les prix. Ne sont pas dans un tableau");
        }
        return $price;
    }
}



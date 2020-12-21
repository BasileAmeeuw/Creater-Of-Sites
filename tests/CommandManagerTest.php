<?php
require_once 'vendor/autoload.php';
require_once 'model/CommandManager.php';
use PHPUnit\Framework\TestCase;

class CommandManagerTest extends TestCase{
    
    //Test to see if totalPrice make the addition good
    public function testSumCommandVector () {
        $listPrices = [1,2,3,5];
        $command = new CommandManager();
        $commandTotal = $command ->totalPrice($listPrices);
        
        $this->assertEquals(array_sum($listPrices), $commandTotal);
    }

    //Test to see if the sum goes well with an empty table
    public function testSumEmpty () {
        $listPrices=[];
        $command=new CommandManager();
        $commandTotal = $command ->totalPrice($listPrices);

        $this->assertEquals(0, $commandTotal);
    }

    //Test to see if it sends an exception when it has to. 
    public function testNotTable () {
        $NotList="test";
        $command=new CommandManager();
        try {
            $commandTotal = $command ->totalPrice($NotList);
        } catch (Exception $e){
            $this->assertEquals("Erreur dans les prix. Ne sont pas dans un tableau",$e->getMessage());
        }
    }

    //Test to see if it works with only one product's price
    public function testOnePrice (){
        $price=[3];
        $command=new CommandManager();
        $commandTotal = $command ->totalPrice($price);

        $this->assertEquals($price[0], $commandTotal);
    }
}

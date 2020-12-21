<?php
require 'vendor/autoload.php';
require 'model/CommandManager.php';
use PHPUnit\Framework\TestCase;

class CommandManagerTest extends TestCase{
    
    public function testSumCommandVector () {
        $listPrices = [1,2,3,5];
        $command = new CommandManager();
        $commandTotal = $command ->totalPrice($listPrices);
        
        $this->assertEquals(array_sum($listPrices), $commandTotal);
    }

    public function testSumEmpty () {
        $listPrices=[];
        $command=new CommandManager();
        $commandTotal = $command ->totalPrice($listPrices);

        $this->assertEquals(0, $commandTotal);
    }

    public function testNotTable () {
        $NotList="test";
        $command=new CommandManager();
        $commandTotal = $command ->totalPrice($NotList);

        $this->assertEquals($commandTotal,"ERROR");
    }

    public function testOnePrice (){
        $price=[3];
        $command=new CommandManager();
        $commandTotal = $command ->totalPrice($price);

        $this->assertEquals($price[0], $commandTotal);
    }
}

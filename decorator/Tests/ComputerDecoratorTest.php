<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\GPU;
use App\OLED;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptop = new GPU($laptop);

        $this->assertSame(600, $laptop->getPrice());
        $this->assertSame("A laptop computer, a GPU", $laptop->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptop = new OLED($laptop);

        $this->assertSame(500, $laptop->getPrice());
        $this->assertSame("A laptop computer, an OLED screen", $laptop->getDescription());
    }
}
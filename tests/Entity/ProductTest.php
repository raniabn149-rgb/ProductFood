<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\DataProvider('pricesforfood')]
    public function testFood(float $prix, float $expectedTva): void
    {
        $p = new Product('mlewi', 'food', $prix);
        $tva = $p->computeTva();
        
        $this->assertSame($expectedTva, $tva);
    }

    public static function pricesforfood(): array
    {
        return [
            [1, 0.055],
            [10, 0.55],
            [20, 1.1],
            [100, 5.5]
        ];
    }

    public function testOther()
    {
        $p = new Product('mlewi', 'other', 10);
        $tva = $p->computeTva();
        $this->assertSame(1.96, $tva);
    }

    public function testInvalidPrice()
    {
        $p = new Product('x', 'y', -5);
        
        // It's better to use the class constant for exceptions
        $this->expectException(\Exception::class);
        
        $p->computeTva();
    }
}
<?php

namespace App\Tests\Entity;

use App\Entity\CompteBoncaire;
use PHPUnit\Framework\TestCase;

class CompteBoncaireTest extends TestCase
{
    public function testConstructAndGetters(): void
    {
        $compte = new CompteBoncaire('Alice', 150.0);

        $this->assertSame('Alice', $compte->getPropriétaire());
        $this->assertSame(150.0, $compte->getSold());
    }

    public function testSetters(): void
    {
        $compte = new CompteBoncaire('Bob', 0.0);
        $compte->setPropriétaire('Charles');
        $compte->setSold(500.5);

        $this->assertSame('Charles', $compte->getPropriétaire());
        $this->assertSame(500.5, $compte->getSold());
    }
}

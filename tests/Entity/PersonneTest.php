<?php

namespace App\Tests\Entity;

use App\Entity\Personne;
use PHPUnit\Framework\TestCase;

class PersonneTest extends TestCase
{
    public function testMineur()
    {
        $p = new Personne('ahmed','benahmed',15);

        $categorie = $p->categorie();

        $this->assertSame('mineur', $categorie);
    }

    public function testMajeur()
    {
        $p = new Personne('arij','znagui',20);

        $categorie = $p->categorie();

        $this->assertSame('majeur', $categorie);
    }

    public function testInvalidAge()
    {
        $p = new Personne('ahmed','benahmed',0);

        $this->expectException('Exception');

        $p->categorie();
    }
}

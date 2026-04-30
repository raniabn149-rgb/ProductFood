<?php

namespace App\Entity;

use App\Repository\CompteBoncaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompteBoncaireRepository::class)]
class CompteBoncaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $propriétaire = null;

    #[ORM\Column]
    private ?float $sold = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropriétaire(): ?string
    {
        return $this->propriétaire;
    }

    public function setPropriétaire(string $propriétaire): static
    {
        $this->propriétaire = $propriétaire;

        return $this;
    }

    public function getSold(): ?float
    {
        return $this->sold;
    }

    public function setSold(float $sold): static
    {
        $this->sold = $sold;

        return $this;
    }
     
 public function __construct($propriétaire,$sold){
            $this->propriétaire=$propriétaire;
            $this->sold=$sold;
        }
        

    
}

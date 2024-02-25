<?php

namespace App\Entity;

use App\Repository\TypeCafeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeCafeRepository::class)]
class TypeCafe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $désignation = null;

    #[ORM\Column(length: 30)]
    private ?string $origine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDésignation(): ?string
    {
        return $this->désignation;
    }

    public function setDésignation(string $désignation): static
    {
        $this->désignation = $désignation;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(string $origine): static
    {
        $this->origine = $origine;

        return $this;
    }
}

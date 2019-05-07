<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RandomNumberRepository")
 */
class RandomNumber
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $prime;

    public function __construct(int $prime)
    {
        $this->prime = $prime;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getPrime(): ?int
    {
        return $this->prime;
    }

    /**
     * @param string $prime
     */
    public function changePrime(string $prime): void
    {
        $this->prime = $prime;
    }
}
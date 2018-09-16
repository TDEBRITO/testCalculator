<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CalculatorRepository")
 */
class Calculator
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
    private $firstValue;

    /**
     * @ORM\Column(type="integer")
     */
    private $secondValue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $sign;

    public function __construct()
    {
        $this->firstValue = 0;
        $this->secondValue = 0;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstValue(): ?int
    {
        return $this->firstValue;
    }

    public function setFirstValue(int $firstValue): self
    {
        $this->firstValue = $firstValue;

        return $this;
    }

    public function getSecondValue(): ?int
    {
        return $this->secondValue;
    }

    public function setSecondValue(int $secondValue): self
    {
        $this->secondValue = $secondValue;

        return $this;
    }

    public function getSign()
    {
        return $this->sign;
    }

    public function setSign($sign): void
    {
        $this->sign = $sign;
    }
}

<?php

namespace App\Entity\Costume;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\DBAL\Types\JsonType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator;
use Symfony\Bridge\Doctrine\Types\UlidType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
#[ApiResource]
class Costume
{
    /**
     * @ORM\Id
     * @ORM\Column(type="ulid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UlidGenerator::class)
     */
    protected ?UlidType $id = null;

    #[Assert\NotBlank]
    /**
     * @ORM\Column
     */
    protected string $name;

    /**
     * @ORM\Column(type="json")
     */
    protected JsonType $features;

    /**
     * @ORM\Column(type="json")
     */
    protected JsonType $flaws;

    /**
     * @ORM\Column(type="json")
     */
    protected JsonType $mockups;

    public function getId(): UlidType
    {
        return $this->id;
    }

    public function setId(UlidType $id): Costume
    {
        $this->id = $id;

        return $this;
    }

    public function getFeatures(): JsonType
    {
        return $this->features;
    }

    public function setFeatures(JsonType $features): Costume
    {
        $this->features = $features;

        return $this;
    }

    public function getFlaws(): JsonType
    {
        return $this->flaws;
    }

    public function setFlaws(JsonType $flaws): Costume
    {
        $this->flaws = $flaws;

        return $this;
    }

    public function getMockups(): JsonType
    {
        return $this->mockups;
    }

    public function setMockups(JsonType $mockups): Costume
    {
        $this->mockups = $mockups;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Costume
    {
        $this->name = $name;

        return $this;
    }
}

<?php

namespace App\Entity\Costume;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\DBAL\Types\JsonType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Types\UlidType;

#[ApiResource]
class Costume
{
    /**
     * @ORM\Column(type="ulid")
     */
    protected ?UlidType $id = null;

    protected JsonType $features;

    protected JsonType $flaws;

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

}

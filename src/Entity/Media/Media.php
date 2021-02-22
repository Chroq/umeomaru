<?php

namespace App\Entity\Media;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\DBAL\Types\JsonType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator;
use Symfony\Bridge\Doctrine\Types\UlidType;

/**
 * @ORM\Entity
 */
#[ApiResource]
class Media
{
    /**
     * @ORM\Id
     * @ORM\Column(type="ulid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UlidGenerator::class)
     */
    protected ?UlidType $id = null;

    /**
     * @ORM\Column
     */
    protected string $path;

    /**
     * @ORM\Column(type="json")
     */
    protected JsonType $metadata;

    public function getId(): UlidType
    {
        return $this->id;
    }

    public function setId(UlidType $ulid): Media
    {
        $this->id = $ulid;
        return $this;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): Media
    {
        $this->path = $path;

        return $this;
    }

    public function getMetadata(): JsonType
    {
        return $this->metadata;
    }

    public function setMetadata(JsonType $metadata): Media
    {
        $this->metadata = $metadata;

        return $this;
    }
}

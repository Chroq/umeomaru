<?php

namespace App\Entity\Media;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\DBAL\Types\JsonType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Types\UlidType;

#[ApiResource]
class Media
{
    /**
     * @ORM\Column(type="ulid")
     */
    protected ?UlidType $id = null;

    protected string $path;

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

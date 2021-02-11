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
    protected UlidType $ulid;

    protected string $path;

    protected JsonType $metadata;

    public function getUlid(): UlidType
    {
        return $this->ulid;
    }

    public function setUlid(UlidType $ulid): Media
    {
        $this->ulid = $ulid;
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

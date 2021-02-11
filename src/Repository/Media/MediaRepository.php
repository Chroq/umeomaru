<?php

namespace App\Repository\Media;

use App\Entity\Costume\Costume;
use App\Entity\Media\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Costume|null find($id, $lockMode = null, $lockVersion = null)
 * @method Costume|null findOneBy(array $criteria, array $orderBy = null)
 * @method Costume[]    findAll()
 * @method Costume[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Media::class);
    }
}

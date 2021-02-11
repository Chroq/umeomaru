<?php

namespace App\Repository\Costume;

use App\Entity\Costume\Costume;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Costume|null find($id, $lockMode = null, $lockVersion = null)
 * @method Costume|null findOneBy(array $criteria, array $orderBy = null)
 * @method Costume[]    findAll()
 * @method Costume[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CostumeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Costume::class);
    }
}

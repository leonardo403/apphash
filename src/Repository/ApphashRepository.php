<?php

namespace App\Repository;

use App\Entity\Apphash;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Apphash|null find($id, $lockMode = null, $lockVersion = null)
 * @method Apphash|null findOneBy(array $criteria, array $orderBy = null)
 * @method Apphash[]    findAll()
 * @method Apphash[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApphashRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Apphash::class);
    }

    // /**
    //  * @return Apphash[] Returns an array of Apphash objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Apphash
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

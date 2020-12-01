<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\TableB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TableB|null find($id, $lockMode = null, $lockVersion = null)
 * @method TableB|null findOneBy(array $criteria, array $orderBy = null)
 * @method TableB[]    findAll()
 * @method TableB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TableBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TableB::class);
    }

    // /**
    //  * @return TableB[] Returns an array of BenGps objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
     */

    /*
    public function findOneBySomeField($value): ?TableB
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
     */
}

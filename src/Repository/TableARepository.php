<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\TableA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TableA|null find($id, $lockMode = null, $lockVersion = null)
 * @method TableA|null findOneBy(array $criteria, array $orderBy = null)
 * @method TableA[]    findAll()
 * @method TableA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TableARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TableA::class);
    }

    // /**
    //  * @return TableA[] Returns an array of BenGps objects
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
    public function findOneBySomeField($value): ?TableA
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

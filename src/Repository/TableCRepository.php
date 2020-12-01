<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\TableC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TableC|null find($id, $lockMode = null, $lockVersion = null)
 * @method TableC|null findOneBy(array $criteria, array $orderBy = null)
 * @method TableC[]    findAll()
 * @method TableC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TableCRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TableC::class);
    }

    // /**
    //  * @return TableC[] Returns an array of BenGps objects
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
    public function findOneBySomeField($value): ?TableC
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

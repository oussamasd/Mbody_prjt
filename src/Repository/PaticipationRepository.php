<?php

namespace App\Repository;

use App\Entity\Paticipation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Paticipation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paticipation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paticipation[]    findAll()
 * @method Paticipation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaticipationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paticipation::class);
    }

    // /**
    //  * @return Paticipation[] Returns an array of Paticipation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Paticipation
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
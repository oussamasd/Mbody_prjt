<?php

namespace App\Repository;

use App\Entity\ImageActEx;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImageActEx|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageActEx|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageActEx[]    findAll()
 * @method ImageActEx[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageActExRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageActEx::class);
    }

    // /**
    //  * @return ImageActEx[] Returns an array of ImageActEx objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageActEx
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

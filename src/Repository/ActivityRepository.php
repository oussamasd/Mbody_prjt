<?php

namespace App\Repository;

use App\Entity\Activity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Activity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activity[]    findAll()
 * @method Activity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activity::class);
    }

    // /**
    //  * @return Activity[] Returns an array of Activity objects
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
    public function findOneBySomeField($value): ?Activity
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

     /**
      * @return Activity[] Returns an array of Activity objects
      */

    public function findActiviteOfWeek($c)
    {
        //$currentdate=date('Y-m-d');
        //$c='2022-02-20';
        return $this->createQueryBuilder('a')
            ->andWhere('a.date_Act = :val  ')
            //->andWhere('a.date_Act < :val2  ')
            ->setParameter('val', $c)
            //->setParameter('val2', $c)
            //->orderBy('a.date_Act', 'ASC')
            ->orderBy('a.temp_act', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
    public function nextDate($i): string
    {

       $currentdate=date('Y-m-d');

        return date('Y-m-d', strtotime($currentdate. ' + '.(string)$i. 'days'));

    }


}

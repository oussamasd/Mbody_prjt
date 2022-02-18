<?php

namespace App\Repository;

use App\Entity\Activity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use function PHPUnit\Framework\equalTo;

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
        //get the day next  with "i" days
    public function nextDate($i): string
    {

       $currentdate=//date('y-m-d');
           $this->MondayDate((string)date('D'));

        return date('Y-m-d', strtotime($currentdate. ' + '.(string)$i. 'days'));

    }
        //get the day back with "i" days
    public function beforeDate($i): string
    {

        $currentdate=date('Y-m-d');

        return date('Y-m-d', strtotime($currentdate. ' - '.(string)$i. 'days'));

    }
    //fixe Monday day
   public function MondayDate($m): string
    {
        if($m=="Mon"){
            return $this->beforeDate(0);
        }
        if($m=="Tue"){
            return $this->beforeDate(1);
        }
        if($m=="Wed"){
            return $this->beforeDate(2);
        }
        if($m=="thu"){
            return $this->beforeDate(3);
        }
        if($m=="Fri"){
            return $this->beforeDate(4);
        }
        if($m=="Sat"){
            return $this->beforeDate(5);
        }
        if($m=="Sun"){
            return $this->beforeDate(6);
        }
        return "noth";

    }


}

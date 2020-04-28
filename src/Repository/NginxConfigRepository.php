<?php

namespace App\Repository;

use App\Entity\NginxConfig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NginxConfig|null find($id, $lockMode = null, $lockVersion = null)
 * @method NginxConfig|null findOneBy(array $criteria, array $orderBy = null)
 * @method NginxConfig[]    findAll()
 * @method NginxConfig[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NginxConfigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NginxConfig::class);
    }

    // /**
    //  * @return NginxConfig[] Returns an array of NginxConfig objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NginxConfig
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

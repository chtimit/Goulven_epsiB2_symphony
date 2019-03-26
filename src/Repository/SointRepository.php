<?php

namespace App\Repository;

use App\Entity\Soint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Soint|null find($id, $lockMode = null, $lockVersion = null)
 * @method Soint|null findOneBy(array $criteria, array $orderBy = null)
 * @method Soint[]    findAll()
 * @method Soint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SointRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Soint::class);
    }

    // /**
    //  * @return Soint[] Returns an array of Soint objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Soint
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

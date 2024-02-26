<?php

namespace App\Repository;

use App\Entity\MonEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MonEntity>
 *
 * @method MonEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method MonEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method MonEntity[]    findAll()
 * @method MonEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MonEntity::class);
    }

    //    /**
    //     * @return MonEntity[] Returns an array of MonEntity objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?MonEntity
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

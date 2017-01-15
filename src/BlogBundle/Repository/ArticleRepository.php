<?php

namespace BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
    public function getArticleSample($category, $number){
        $qb= $this->createQueryBuilder('a')
            ->select('a')
            ->where('a.visible = 1')
            ->andWhere('c.name = :category')
            ->innerJoin('a.categories', 'c')
            ->setMaxResults(':number')
            ->orderBy('a.id', 'ASC')
            ->setParameter('category', $category)
            ->getQuery();
        return $qb->getResult();
    }

}

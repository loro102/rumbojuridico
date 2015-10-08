<?php
namespace Rumbo\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ClienteRepository extends EntityRepository
{
    public function findAllOrderedByNombre()
    {
        return $this->createQueryBuilder('a')
            ->addOrderBy('a.nombre')
            ->addOrderBy('a.apellido1', 'ASC')
            ->addOrderBy('a.apellido2')
            ->getQuery()
            ->getResult();

    }

}
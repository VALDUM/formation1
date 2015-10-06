<?php
namespace ParkBundle\Services;

use Doctrine\Bundle\DoctrineBundle\Registry;

class ComputerManager
{
    /**
     * @var Registry
     */
    protected $doctrine;

    public function __construct(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getOrdiList()
    {
        return $this->doctrine->getEntityManager()->getRepository('ParkBundle:Computer')->findAll();
    }

}
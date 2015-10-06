<?php

namespace ParkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ComputerController extends Controller
{
    /**
     * @Route("/computer",name="park_computer")
     * @Template()
     */
    public function indexAction()
    {
        return array("computers" => $this->getComputerList());
    }
    public function getComputerList()
    {
        return array (
            0 => array(
                "id" => "1",
                "name" => "Nom 1",
                "ip" => "100.101.102.103",
                "enabled" => true
            ),
            1 => array (
                "id" => "2",
                "name" => "Nom 2",
                "ip" => "100.101.102.104",
                "enabled" => true
            ),
            2 => array (
                "id" => "3",
                "name" => "Nom 3",
                "ip" => "100.101.102.105",
                "enabled" => false
            )
        );
    }

}

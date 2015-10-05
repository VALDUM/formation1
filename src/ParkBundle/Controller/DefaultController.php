<?php

namespace ParkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route(
     *    "/hello/{name}/{num}",
     *    requirements={
     *         "name": "[a-zA-Z]+",
     *         "num":"[0-8]"
     *      }
     * )
     * @Template()
     */
    public function indexAction($name,$num)
    {
        return array(
            'name' => $name,
            'num' => $num
        );
    }

}

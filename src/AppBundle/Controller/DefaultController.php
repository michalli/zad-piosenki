<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/pani-twardowska.html", name="pani-twardowska")
     */
    public function paniTwardowskaAction()
    {
        return $this->render('default/pani-twardowska.html.twig');
    }


    /*
     * A
     */

    /*
     * B
     */

    /*
     * C
     */

    /*
     * D
     */

    /*
     * E
     */

    /*
     * F
     */

    /*
     * G
     */

    /*
     * H
     */

    /*
     * I
     */

     /**
     * @Route("/juvenile.html", name="juvenile")
     */
    public function juvenileAction()
    {
        return $this->render('default/juvenile.html.twig');
    }

    /*
     * K
     */

    /*
     * L
     */

    /*
     * M
     */
	 	    /**
     * @Route("/piosenka-mury.html", name="piosenka-mury")
     */
    public function piosenkaMuryAction()
    {
        return $this->render('default/piosenka-mury.html.twig');
    }

    /*
     * N
     */

    /*
     * O
     */

    /*
     * P
     */

    /*
     * Q
     */

    /*
     * R
     */

    /*
     * S
     */

    /*
     * T
     */

    /*
     * U
     */

    /*
     * V
     */

    /*
     * W
     */

    /*
     * X
     */

    /*
     * Y
     */

    /*
     * Z
     */


}

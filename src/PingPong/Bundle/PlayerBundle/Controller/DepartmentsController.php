<?php

namespace PingPong\Bundle\PlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * DepartmentsController
 *
 * @author David Yell <neon1024@gmail.com>
 *
 * @Route("/departments")
 */
class DepartmentsController extends Controller
{
    /**
     * List all the departments
     *
     * @Route("/", name="departments_index")
     * @Template()
     *
     * @return array
     */
    public function indexAction()
    {
        $departments = $this->getDoctrine()
                            ->getRepository('PingPongPlayerBundle:Department')
                            ->findAll();

        return array(
            'departments' => $departments
        );
    }

    /**
     * View a specific department
     *
     * @param int $id The department id
     *
     * @Route("/view/{id}", name="departments_view")
     * @Template()
     *
     * @return array
     */
    public function viewAction($id)
    {
        $department = $this->getDoctrine()
                           ->getRepository('PingPongPlayerBundle:Department')
                           ->findOneBy(array('id' => $id));

        return array(
            'department' => $department
        );
    }

}
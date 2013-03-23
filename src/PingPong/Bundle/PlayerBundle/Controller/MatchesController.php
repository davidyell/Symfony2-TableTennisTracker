<?php
/**
 * Description of MatchesController
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use PingPong\Bundle\PlayerBundle\Form\MatchType;

/**
 * MatchesController
 *
 * @Route("/matches")
 */
class MatchesController extends Controller
{
    /**
     * List the matches
     *
     * @Route("/", name="matches_index")
     * @Template()
     *
     * @return array
     */
    public function indexAction()
    {
        $matches = $this->getDoctrine()
                        ->getRepository('PingPongPlayerBundle:Match')
                        ->findBy(array(), array('id' => 'DESC'));

        return array(
            'matches' => $matches
        );
    }

    /**
     * Add a match
     *
     * @param Request $request
     *
     * @Route("/add", name="matches_add")
     * @Template()
     *
     * @return array
     */
    public function addAction(Request $request)
    {
        $matchForm = new MatchType();
        $form = $this->createForm($matchForm);

        if ($request->isMethod('post')) {
            $form->bind($this->getRequest());
<<<<<<< HEAD

            $m = $this->getDoctrine()->getManager();
            $m->persist($form->getData());
            $m->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Match saved');

=======

            $m = $this->getDoctrine()->getManager();
            $m->persist($form->getData());
            $m->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Match saved');

>>>>>>> 1f576cdbfc749eff769acb158af9e4fa48f655be
            return $this->redirect($this->generateUrl('matches_index'));
        }

        return array(
            'form' => $form->createView()
        );
    }

}
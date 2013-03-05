<?php
/**
 * PlayersController
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use PingPong\Bundle\PlayerBundle\Entity\Player;
use PingPong\Bundle\PlayerBundle\Form\PlayerType;

/**
 * PlayersController
 *
 * @Route("/players")
 */
class PlayersController extends Controller
{
    /**
     * Render a list of players
     *
     * @Route("/", name="players_index")
     * @Template()
     *
     * @return array
     */
    public function indexAction()
    {
        $players = $this->getDoctrine()
                        ->getRepository('PingPongPlayerBundle:Player')
                        ->findBy(array(),
                          array(
                              'firstName'=>'ASC'
                              )
                          );

        return array(
            'players' => $players
        );
    }

    /**
     * Add a new player
     *
     * @Route("/add", name="players_add")
     * @Template()
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function addAction(Request $request)
    {
        $playerForm = new PlayerType();
        $form = $this->createForm($playerForm);

        if ($request->isMethod('post')) {
            $form->bind($this->getRequest());

            $m = $this->getDoctrine()->getManager();
            $m->persist($form->getData());
            $m->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Player created');

            return $this->redirect($this->generateUrl('players_index'));
        }

        return array(
            'form' => $form->createView()
        );
    }
}
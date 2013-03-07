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
     */
    public function indexAction()
    {

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

        return array(

        );
    }

}
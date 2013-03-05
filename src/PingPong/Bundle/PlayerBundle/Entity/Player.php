<?php
/**
 * Player entity
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player object
 *
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $lastName;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $nickName;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(type="integer")
     */
    protected $performanceRating;

    /**
     * @var object
     *
     * @ORM\Column(type="integer")
     */
    protected $department;
}
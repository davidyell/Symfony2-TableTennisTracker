<?php
/**
 * Side entity to deal with the players on each side of a match
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Side object
 *
 * @ORM\Entity
 * @ORM\Table(name="sides")
 */
class Side
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="Match", inversedBy="sides")
     */
    protected $match;

    /**
     * @var object
     *
     * @ORM\ManyToMany(targetEntity="Player")
     * @ORM\JoinTable(name="players_sides",
     *      joinColumns={@ORM\JoinColumn(name="player_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="side_id", referencedColumnName="id")}
     *      )
     */
    protected $players;

    /**
     * @var object
     *
     * @ORM\OneToOne(targetEntity="Result", mappedBy="side")
     */
    protected $result;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set match
     *
     * @param \PingPong\Bundle\PlayerBundle\Entity\Match $match
     * @return Side
     */
    public function setMatch(\PingPong\Bundle\PlayerBundle\Entity\Match $match = null)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return \PingPong\Bundle\PlayerBundle\Entity\Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Add players
     *
     * @param \PingPong\Bundle\PlayerBundle\Entity\Player $players
     *
     * @return Side
     */
    public function addPlayer(\PingPong\Bundle\PlayerBundle\Entity\Player $players)
    {
        $this->players->add($players);

        return $this;
    }

    /**
     * Remove players
     *
     * @param \PingPong\Bundle\PlayerBundle\Entity\Player $players
     */
    public function removePlayer(\PingPong\Bundle\PlayerBundle\Entity\Player $players)
    {
        $this->players->removeElement($players);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set result
     *
     * @param \PingPong\Bundle\PlayerBundle\Entity\Result $result
     * @return Side
     */
    public function setResult(\PingPong\Bundle\PlayerBundle\Entity\Result $result = null)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return \PingPong\Bundle\PlayerBundle\Entity\Result
     */
    public function getResult()
    {
        return $this->result;
    }
}
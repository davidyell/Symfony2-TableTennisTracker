<?php
/**
 * Department entity
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Department object
 *
 * @ORM\Entity
 * @ORM\Table(name="departments")
 */
class Department
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
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="PingPong\Bundle\PlayerBundle\Entity\Player", mappedBy="department")
     */
    protected $players;

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
     * Set name
     *
     * @param string $name
     *
     * @return Department
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add players
     *
     * @param \PingPong\Bundle\PlayerBundle\Entity\Player $players
     *
     * @return Department
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
}
<?php
/**
 * Match entity
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Match object
 *
 * @ORM\Entity
 * @ORM\Table(name="matches")
 */
class Match
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
     * @var array
     *
     * @ORM\ManyToOne(targetEntity="MatchType")
     * @ORM\JoinColumn(name="match_type_id", referencedColumnName="id")
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $notes;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Side", mappedBy="match")
     */
    protected $sides;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sides = new ArrayCollection();
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
     * Set type
     *
     * @param integer $type
     *
     * @return Match
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Match
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add sides
     *
     * @param \PingPong\Bundle\PlayerBundle\Entity\Side $sides
     *
     * @return Match
     */
    public function addSide(\PingPong\Bundle\PlayerBundle\Entity\Side $sides)
    {
        $this->sides[] = $sides;

        return $this;
    }

    /**
     * Remove sides
     *
     * @param \PingPong\Bundle\PlayerBundle\Entity\Side $sides
     */
    public function removeSide(\PingPong\Bundle\PlayerBundle\Entity\Side $sides)
    {
        $this->sides->removeElement($sides);
    }

    /**
     * Get sides
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSides()
    {
        return $this->sides;
    }
}
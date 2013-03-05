<?php
/**
 * Result entity
 *
 * @author David Yell <neon1024@gmail.com>
 */

namespace PingPong\Bundle\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Result object
 *
 * @ORM\Entity
 * @ORM\Table(name="results")
 */
class Result
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
     * @ORM\OneToOne(targetEntity="Side", inversedBy="result")
     */
    protected $side;

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
     * Set side
     *
     * @param \PingPong\Bundle\PlayerBundle\Entity\Side $side
     * @return Result
     */
    public function setSide(\PingPong\Bundle\PlayerBundle\Entity\Side $side = null)
    {
        $this->side = $side;
    
        return $this;
    }

    /**
     * Get side
     *
     * @return \PingPong\Bundle\PlayerBundle\Entity\Side 
     */
    public function getSide()
    {
        return $this->side;
    }
}
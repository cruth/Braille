<?php

namespace EPFC\Bundle\BrailleBundle\Entity\Braille;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 */
class Test
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var boolean
     */
    private $homme;


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
     * Set nom
     *
     * @param string $nom
     * @return Test
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set homme
     *
     * @param boolean $homme
     * @return Test
     */
    public function setHomme($homme)
    {
        $this->homme = $homme;

        return $this;
    }

    /**
     * Get homme
     *
     * @return boolean 
     */
    public function getHomme()
    {
        return $this->homme;
    }
}

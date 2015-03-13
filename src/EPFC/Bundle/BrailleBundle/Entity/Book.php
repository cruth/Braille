<?php

namespace EPFC\Bundle\BrailleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EPFC\Bundle\BrailleBundle\Entity\BookRepository")
 */
class Book
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description_id", type="string", length=255)
     */
    private $descriptionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorie_id", type="integer")
     */
    private $categorieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="public_id", type="integer")
     */
    private $publicId;

    /**
     * @var integer
     *
     * @ORM\Column(name="image_id", type="integer", nullable=true)
     */
    private $imageId;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=128, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=255, nullable=true)
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255, nullable=true)
     */
    private $resume;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;


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
     * Set descriptionId
     *
     * @param string $descriptionId
     * @return Book
     */
    public function setDescriptionId($descriptionId)
    {
        $this->descriptionId = $descriptionId;

        return $this;
    }

    /**
     * Get descriptionId
     *
     * @return string 
     */
    public function getDescriptionId()
    {
        return $this->descriptionId;
    }

    /**
     * Set categorieId
     *
     * @param integer $categorieId
     * @return Book
     */
    public function setCategorieId($categorieId)
    {
        $this->categorieId = $categorieId;

        return $this;
    }

    /**
     * Get categorieId
     *
     * @return integer 
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
     * Set publicId
     *
     * @param integer $publicId
     * @return Book
     */
    public function setPublicId($publicId)
    {
        $this->publicId = $publicId;

        return $this;
    }

    /**
     * Get publicId
     *
     * @return integer 
     */
    public function getPublicId()
    {
        return $this->publicId;
    }

    /**
     * Set imageId
     *
     * @param integer $imageId
     * @return Book
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }

    /**
     * Get imageId
     *
     * @return integer 
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Book
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Book
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Book
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set edition
     *
     * @param string $edition
     * @return Book
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Book
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Book
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

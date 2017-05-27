<?php
// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nume;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $categorie;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $propunator;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $descriere;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $locatie;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $status;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $scor;

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
     * Set nume
     *
     * @param string $nume
     *
     * @return Post
     */
    public function setNume($nume)
    {
        $this->nume = $nume;
    
        return $this;
    }

    /**
     * Get nume
     *
     * @return string
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Post
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set propunator
     *
     * @param string $propunator
     *
     * @return Post
     */
    public function setPropunator($propunator)
    {
        $this->propunator = $propunator;
    
        return $this;
    }

    /**
     * Get propunator
     *
     * @return string
     */
    public function getPropunator()
    {
        return $this->propunator;
    }

    /**
     * Set descriere
     *
     * @param string $descriere
     *
     * @return Post
     */
    public function setDescriere($descriere)
    {
        $this->descriere = $descriere;
    
        return $this;
    }

    /**
     * Get descriere
     *
     * @return string
     */
    public function getDescriere()
    {
        return $this->descriere;
    }

    /**
     * Set locatie
     *
     * @param string $locatie
     *
     * @return Post
     */
    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;
    
        return $this;
    }

    /**
     * Get locatie
     *
     * @return string
     */
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Post
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set scor
     *
     * @param string $scor
     *
     * @return Post
     */
    public function setScor($scor)
    {
        $this->scor = $scor;
    
        return $this;
    }

    /**
     * Get scor
     *
     * @return string
     */
    public function getScor()
    {
        return $this->scor;
    }
}

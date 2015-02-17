<?php

namespace Grupa\ProjektBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filmy
 *
 * @ORM\Table(name="filmy")
 * @ORM\Entity
 */
 
 class Filmy
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
	  * @ORM\Column(name="tytul", type="string", length=255)
      */
	private $tytul;
	
	/**
	  * @var string
      * @ORM\Column(name="opis", type="string", length=255)
      */
	private $opis;
	
	/**
	  * @var string
      * @ORM\Column(name="recenzje", type="string", length=255)
	  */
	  
	private $recenzje;
	
	/**
      * @var string
      * @ORM\Column(name="cena", type="decimal", scale=2)
      */
	private $cena;

	/**
      * @var string
      * @ORM\Column(name="ocena", type="decimal", length=255)
      */
	private $ocena;	
	
	/**
      * @var string
      * @ORM\Column(name="listaAktorow", type="string", length=255)
      */
	private $listaAktorow;
	

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
     * Set tytul
     *
     * @param string $tytul
     * @return Filmy
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }

    /**
     * Get tytul
     *
     * @return string 
     */
    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * Set opis
     *
     * @param string $opis
     * @return Filmy
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string 
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set recenzje
     *
     * @param string $recenzje
     * @return Filmy
     */
    public function setRecenzje($recenzje)
    {
        $this->recenzje = $recenzje;

        return $this;
    }

    /**
     * Get recenzje
     *
     * @return string 
     */
    public function getRecenzje()
    {
        return $this->recenzje;
    }

    /**
     * Set cena
     *
     * @param string $cena
     * @return Filmy
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena
     *
     * @return string 
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Set ocena
     *
     * @param string $ocena
     * @return Filmy
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;

        return $this;
    }

    /**
     * Get ocena
     *
     * @return string 
     */
    public function getOcena()
    {
        return $this->ocena;
    }

    /**
     * Set listaAktorow
     *
     * @param string $listaAktorow
     * @return Filmy
     */
    public function setListaAktorow($listaAktorow)
    {
        $this->listaAktorow = $listaAktorow;

        return $this;
    }

    /**
     * Get listaAktorow
     *
     * @return string 
     */
    public function getListaAktorow()
    {
        return $this->listaAktorow;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add films
     *
     * @param \Grupa\ProjektBundle\Entity\Filmy $films
     * @return Film
     */
    public function addFilms(\Grupa\ProjektBundle\Entity\Filmy $films)
    {
        $this->films[] = $films;

        return $this;
    }

    /**
     * Remove films
     *
     * @param \Grupa\ProjektBundle\Entity\Filmy $films
     */
    public function removeFilms(\Grupa\ProjektBundle\Entity\Filmy $films)
    {
        $this->films->removeElement($films);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilms()
    {
        return $this->films;
    }
}

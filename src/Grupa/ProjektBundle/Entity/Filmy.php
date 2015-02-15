<?php

namespace Grupa\ProjektBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filmy
 * 
 * @ORM\Entity
 * @ORM\Table(name="filmy")
 */
 
 class Filmy
{
	/**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
	private $id;
	
	/**
      * @ORM\Column(type="string", length=200)
      */
	private $tytul;
	
	/**
      * @ORM\Column(type="text")
      */
	private $opis;
	
	/**
      * @ORM\Column(type="text")
      */
	private $recenzje;
	
	/**
      * @ORM\Column(type="decimal", scale=2)
      */
	private $cena;

	/**
      * @ORM\Column(type="decimal", scale=2)
      */
	private $ocena;	
	
	/**
      * @ORM\Column(type="text")
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
}

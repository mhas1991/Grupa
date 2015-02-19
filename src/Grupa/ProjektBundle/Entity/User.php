<?php

namespace Grupa\ProjektBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idKlienta;

	/**
      * @ORM\Column(type="string", length=40)
      */
	private $imie;
	
	/**
      * @ORM\Column(type="string", length=40)
      */
	private $nazwisko;
	
	/**
      * @ORM\Column(type="string", length=11)
      */
	private $pesel;
	
	/**
      * @ORM\Column(type="string", length=40)
      */
	private $typUsera;

	/**
      * @ORM\Column(type="string", length=40)
      */
	
	private $adresEmail;
	
	/**
      * @ORM\Column(type="decimal", scale=2)
      */
	private $iloscWypozyczen;	
	
	/**
      * @ORM\Column(type="string", length=40)
      */
	private $telefon;
	
	/**
      * @ORM\Column(type="string", length=40)
      */
	private $haslo;
	
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
     * Set imie
     *
     * @param string $imie
     * @return User
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string 
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return User
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string 
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set pesel
     *
     * @param string $pesel
     * @return User
     */
    public function setPesel($pesel)
    {
        $this->pesel = $pesel;

        return $this;
    }

    /**
     * Get pesel
     *
     * @return string 
     */
    public function getPesel()
    {
        return $this->pesel;
    }

    /**
     * Set typUsera
     *
     * @param string $typUsera
     * @return User
     */
    public function setTypUsera($typUsera)
    {
        $this->typUsera = $typUsera;

        return $this;
    }

    /**
     * Get typUsera
     *
     * @return string 
     */
    public function getTypUsera()
    {
        return $this->typUsera;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set iloscWypozyczen
     *
     * @param string $iloscWypozyczen
     * @return User
     */
    public function setIloscWypozyczen($iloscWypozyczen)
    {
        $this->iloscWypozyczen = $iloscWypozyczen;

        return $this;
    }

    /**
     * Get iloscWypozyczen
     *
     * @return string 
     */
    public function getIloscWypozyczen()
    {
        return $this->iloscWypozyczen;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     * @return User
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Get idKlienta
     *
     * @return integer 
     */
    public function getIdKlienta()
    {
        return $this->idKlienta;
    }

    /**
     * Set adresEmail
     *
     * @param string $adresEmail
     * @return User
     */
    public function setAdresEmail($adresEmail)
    {
        $this->adresEmail = $adresEmail;

        return $this;
    }

    /**
     * Get adresEmail
     *
     * @return string 
     */
    public function getAdresEmail()
    {
        return $this->adresEmail;
    }

    /**
     * Set haslo
     *
     * @param string $haslo
     * @return User
     */
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;

        return $this;
    }

    /**
     * Get haslo
     *
     * @return string 
     */
    public function getHaslo()
    {
        return $this->haslo;
    }
}

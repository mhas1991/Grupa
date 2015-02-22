<?php

namespace Grupa\ProjektBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Grupa\ProjektBundle\Entity\Zamowienia as Zamowienia;
use Grupa\ProjektBundle\Entity\Recenzja as Recenzja;
use Grupa\ProjektBundle\Entity\FilmGatunek as FilmGatunek;

/**
* @ORM\Entity
* @ORM\Table()
*/
class Film
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	
	/**
	* @ORM\ManyToMany(targetEntity="Zamowienia", inversedBy="film")
	* @ORM\JoinTable(name="FilmZamowienia")
	*/
	protected $zamowienie;
	
	/**
	* @ORM\Column(type="string", length=125)
	*/
	protected $tytul;
	
	/**
	* @ORM\Column(type="decimal", scale=2)
	*/
	protected $cena;
	
	/**
	* @ORM\ManyToOne(targetEntity="FilmGatunek", inversedBy="name")
	* @ORM\JoinColumn(name="gatunek_nazwa", referencedColumnName="name")
	*/
	protected $gatunek;
	
	/**
	* @ORM\Column(type="decimal", length=255)
	*/
	protected $ocena;
	
	/**
	* @ORM\Column(type="text")
	*/
	protected $opis;
	
	/**
	* @ORM\Column(type="text")
	*/
	protected $aktorzy;
	
	/**
	* @ORM\OneToMany(targetEntity="Recenzja", mappedBy="user")
	*/	
	protected $recenzje;
	
	/**
	* @ORM\Column(type="string", length=150, name="film_okladka", options = {"default" = "default.png"} )
	*/	
	protected $okladka = "default.png";
	public function __construct()
	{
		$this->recenzje = new \Doctrine\Common\Collections\ArrayCollection();
		$this->zamowienie = new \Doctrine\Common\Collections\ArrayCollection();
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
	* Set tytul
	*
	* @param string $tytul
	* @return Film
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
	* Set cena
	*
	* @param string $cena
	* @return Film
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
	* @return Film
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
	* Set opis
	*
	* @param string $opis
	* @return Film
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
	* Set aktorzy
	*
	* @param string $aktorzy
	* @return Film
	*/
	public function setAktorzy($aktorzy)
	{
		$this->aktorzy = $aktorzy;
		return $this;
	}
	
	/**
	* Get aktorzy
	*
	* @return string
	*/
	public function getAktorzy()
	{
		return $this->aktorzy;
	}
	
	/**
	* Set okladka
	*
	* @param string $okladka
	* @return Film
	*/
	public function setOkladka($okladka)
	{
		$this->okladka = $okladka;
		return $this;
	}
	
	/**
	* Get okladka
	*
	* @return string
	*/
	public function getOkladka()
	{
		return $this->okladka;
	}
	
	/**
	* Add zamowienie
	*
	* @param \Grupa\ProjektBundle\Entity\Zamowienia $zamowienie
	* @return Film
	*/
	public function addZamowienie(\Grupa\ProjektBundle\Entity\Zamowienia $zamowienie)
	{
		$this->zamowienie[] = $zamowienie;
		return $this;
	}
	
	/**
	* Remove zamowienie
	*
	* @param \Grupa\ProjektBundle\Entity\Zamowienia $zamowienie
	*/
	public function removeZamowienie(\Grupa\ProjektBundle\Entity\Zamowienia $zamowienie)
	{
		$this->zamowienie->removeElement($zamowienie);
	}
	
	/**
	* Get zamowienie
	*
	* @return \Doctrine\Common\Collections\Collection
	*/
	public function getZamowienie()
	{
		return $this->zamowienie;
	}
	
	/**
	* Set gatunek
	*
	* @param \Grupa\ProjektBundle\Entity\FilmGatunek $gatunek
	* @return Film
	*/
	public function setGatunek(\Grupa\ProjektBundle\Entity\FilmGatunek $gatunek = null)
	{
		$this->gatunek = $gatunek;
		return $this;
	}
	
	/**
	* Get gatunek
	*
	* @return \Grupa\ProjektBundle\Entity\FilmGatunek
	*/
	public function getGatunek()
	{
		return $this->gatunek;
	}
	
	/**
	* Add recenzje
	*
	* @param \Grupa\ProjektBundle\Entity\Recenzja $recenzje
	* @return Film
	*/
	public function addRecenzje(\Grupa\ProjektBundle\Entity\Recenzja $recenzje)
	{
		$this->recenzje[] = $recenzje;
		return $this;
	}
	
	/**
	* Remove recenzje
	*
	* @param \Grupa\ProjektBundle\Entity\Recenzja $recenzje
	*/
	public function removeRecenzje(\Grupa\ProjektBundle\Entity\Recenzja $recenzje)
	{
		$this->recenzje->removeElement($recenzje);
	}
	
	/**
	* Get recenzje
	*
	* @return \Doctrine\Common\Collections\Collection
	*/
	public function getRecenzje()
	{
		return $this->recenzje;
	}
}

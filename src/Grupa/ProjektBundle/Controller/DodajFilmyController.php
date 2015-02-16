<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Grupa\ProjektBundle\Entity\Filmy;
use Grupa\ProjektBundle\Form\FilmyType;


class DodajFilmyController extends Controller
{
	public function dodajFilmAction()
	{			
		return $this->render(
			'GrupaProjektBundle:Index:index.html.twig', 
			array(
				'nazwaZmiennej1' => 'takie',
				'nazwazmiennej2' => 'jarrrrrr'
			)
		);
	}
}
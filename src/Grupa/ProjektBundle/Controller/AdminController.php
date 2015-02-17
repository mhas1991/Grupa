<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdminController extends Controller

{
	public function dodajFilmAction()
	{
		return $this->render('GrupaProjektBundle:Admin:dodajFilm.html.twig');
	}

	public function usunFilmAction()
		{
			return $this->render('GrupaProjektBundle:Admin:usunFilm.html.twig');
		}

	public function panelAction()
		{
			return $this->render('GrupaProjektBundle:Admin:panel.html.twig');
		}
}
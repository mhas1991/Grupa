<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Grupa\ProjektBundle\Entity\Filmy;

class IndexController extends Controller

{
	public function showIndexAction()
	{
		return $this->render('GrupaProjektBundle:Index:index.html.twig');
	}
	public function logowanieAction()
	{
		return $this->render('GrupaProjektBundle:Uzytkownik:logowanie.html.twig');
	}

}
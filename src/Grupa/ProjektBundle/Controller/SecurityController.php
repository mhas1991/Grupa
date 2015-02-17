<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class SecurityController extends Controller
{
	public function logowanieAction()
	{
		return $this->render('GrupaProjektBundle:Security:login.html.twig');
	}

	public function zalogowanyAction()
	{
		return $this->render('GrupaProjektBundle:Security:zalogowany.html.twig');
	}

	public function recenzjaAction()
	{
		return $this->render('GrupaProjektBundle:Security:recenzja.zalogowany.html.twig');
	}

}
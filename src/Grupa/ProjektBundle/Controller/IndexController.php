<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller
{
	public function indexAction()
	{
		return $this->render('GrupaProjektBundle:Index:index.html.twig');
	}

	public function logowanieAction()
	{
		return $this->render('GrupaProjektBundle:Index:login.html.twig');
	}

	public function zalogowanyAction()
	{
		return $this->render('GrupaProjektBundle:Index:zalogowany.html.twig');
	}

	public function recenzjaAction()
	{
		return $this->render('GrupaProjektBundle:Index:recenzja.zalogowany.html.twig');
	}
}
<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FilmyController extends Controller
{
	public function filmyAction()
	{
		return $this->render('GrupaProjektBundle:Filmy:filmy.index.html.twig');
	}

	public function movieAction($slug)
	{
		return $this->render('GrupaProjektBundle:Filmy:'.$slug.'.index.html.twig');
	}
}

<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FilmyController extends Controller
{
	public function showFilmAction()
	{
		return $this->render('GrupaProjektBundle:Filmy:filmy.index.html.twig');
	}




}

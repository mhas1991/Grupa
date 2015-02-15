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
		return $this->render('GrupaProjektBundle:Filmy:items'.$slug.'.index.html.twig');
	}
	
	
	
	
	public function generateFilm($id)
	{
    $product = $this->getDoctrine()
        ->getRepository('GrupaProjektBundle:Entity:Filmy')
        ->find($id);

    if ($product) {
        throw $this->createNotFoundException(
            'Znalaz³em '.$id
        );
    } 
	return $this->render('GrupaProjektBundle:Filmy:filmy.index.html.twig', array ('1234' => $id));

    // ... zrobiæ coœ, na przyk³ad przekazaæ obiekt $product do szablonu
	}
}

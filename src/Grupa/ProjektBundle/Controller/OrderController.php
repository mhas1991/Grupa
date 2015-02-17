<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class OrderController extends Controller

{

	public function orderShowAction()
		{
			return $this->render('GrupaProjektBundle:Order:order.html.twig');
		}

}
<?php

namespace Snw\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Componenent\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;

class SomeController extends Controller
{
	public function indexAction(Request $request, $name)
	{
		$request->headers->get('utm-source');

		return $this->render('FrontBundle:Default:index.html.twig', array(
			'name' => $name,
			'request' => print_r($request, true)
		));
	}
}
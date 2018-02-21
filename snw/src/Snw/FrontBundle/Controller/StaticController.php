<?php

namespace Snw\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
	public function homepageAction()
	{
		$name = 'World';
		return $this->render('FrontBundle:Static:homepage.html.twig',
			array('name' => $name)
		);
	}

	public function aboutAction()
	{
		return $this->render('FrontBundle:Static:about.html.twig');
	}
}
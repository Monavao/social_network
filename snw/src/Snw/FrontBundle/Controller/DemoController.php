<?php

namespace Snw\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DemoController extends Controller
{
	public function helloAction($name)
	{
		//$response = new Response(json_encode(array('name' => $name)));
		//$response->headers->set('Content-Type', 'application/json');

		$response = new RedirectResponse('http://www.viemonjob.com/');

		return $response;
	}
}
<?php

namespace Snw\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
	public function homepageAction()
	{
		return new Response("Hello World !!!");
	}
}
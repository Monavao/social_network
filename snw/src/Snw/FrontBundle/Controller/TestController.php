<?php

namespace Snw\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
	public function addAction()
	{
		$article = array();
		$form = $this->createFormBuilder($article)
			->add('title', 'text')
			->add('content', 'text')
			->add('publicationDate', 'date')
			->add('save', 'submit')
			->getForm();

		return $this->render('FrontBundle:Default:index.html.twig', array(
			'form' => $form->createView()
		));
	}
}
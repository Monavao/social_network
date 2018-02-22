<?php

namespace Snw\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Snw\FrontBundle\Entity\Status;

class TimelineController extends Controller
{
	public function timelineAction()
	{
		$em = $this->getDoctrine()->getManager();
		$statuses = $em->getRepository('FrontBundle:Status')->findAll();

		return $this->render('FrontBundle:Timeline:timeline.html.twig', array(
			'statues' => $statuses
		));
	}
}
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

	public function userTimelineAction($userId)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('FrontBundle:User')->findOneById($userId);

		if(!$user)
		{
			$this->createNotFoundException("Aucun utlisateur trouvé.");
		}

		$statuses = $em->getRepository('FrontBundle:Status')->findBy(array(
			'user' => $user,
			'deleted' => false
		));

		return $this->render('FrontBundle:Timeline:user_timeline.html.twig', array(
			'user' => $user,
			'statuses' => $statuses
		));
	}
}
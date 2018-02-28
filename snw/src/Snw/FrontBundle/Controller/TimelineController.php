<?php

namespace Snw\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Snw\FrontBundle\Entity\Status;

class TimelineController extends Controller
{
	public function timelineAction()
	{
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('FrontBundle:Status');
		$statuses = $repository->findAll();

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

		$statuses = $em->getRepository('FrontBundle:Status')->getUserTimeline($user)->getResult();

		return $this->render('FrontBundle:Timeline:user_timeline.html.twig', array(
			'user' => $user,
			'statuses' => $statuses
		));
	}

	public function friendsTimelineAction($userId)
	{
		$em = $this->getDoctrine()->getManager();

		$user = $em->getRepository('FrontBundle:User')->findOneById($userId);

		if(!$user)
		{
			$this->createNotFoundException("L'utilisateur n'a pas été trouvé.");
		}

		$statuses = $em->getRepository('FrontBundle:Status')->getFriendsTimeline($user)->getResult();

		return $this->render('FrontBundle:Timeline:friends_timeline.html.twig', array(
			'user' => $user,
			'statuses' => $statuses
		));
	}
}
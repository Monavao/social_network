<?php

namespace Snw\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Snw\FrontBundle\Entity\Status;

class LoadStatusData implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$faker = \Faker\Factory::create();

		for($i = 0; $i < self::MAX_NB_STATUS; $i++)
		{
			$status = new Status();
			$status->setContent($faker->text(250));
			$status->setDeleted($faker->boolean);

			$manager->persist();
		}

		$manager->flush();
	}
}
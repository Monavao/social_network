<?php

namespace Snw\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Snw\FrontBundle\Entity\Status;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="username", type="string", length=255)
	 */
	private $username;

    /**
     * @ORM\OneToMany(targetEntity="Status", mappedBy="user")
     */
    protected $statuses;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function __construct()
    {
        //parent::__construct();
        $this->satuses = new ArrayCollection();
    }

    /**
     * Add status
     *
     * @param \Snw\FrontBundle\Entity\Status $status
     *
     * @return User
     */
    public function addStatus(\Snw\FrontBundle\Entity\Status $status)
    {
        $this->statuses[] = $status;

        return $this;
    }

    /**
     * Remove status
     *
     * @param \Snw\FrontBundle\Entity\Status $status
     */
    public function removeStatus(\Snw\FrontBundle\Entity\Status $status)
    {
        $this->statuses->removeElement($status);
    }

    /**
     * Get statuses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatuses()
    {
        return $this->statuses;
    }
}

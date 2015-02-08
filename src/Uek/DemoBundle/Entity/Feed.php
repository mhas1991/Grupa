<?php

namespace Uek\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  * @ORM\Table()
  */
class Feed

{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
protected $id;

	 /**
	  * @ORM\Column(type="string", length=255)
	  */
protected $title;

	/**
	* @ORM\Column(type="text")
	*/

	protected $content;
	/**
	* @ORM\Column(type="datetime")
	*/	
	
	protected $createdAt;

	public function __construct()
		{
			$this->createdAt = new \DateTime('now');
		}
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

}
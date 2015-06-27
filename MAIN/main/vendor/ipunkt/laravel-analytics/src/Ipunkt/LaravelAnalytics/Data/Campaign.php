<?php namespace Ipunkt\LaravelAnalytics\Data;

/**
 * Class Campaign
 * @package Ipunkt\LaravelAnalytics\Data
 */
class Campaign
{
	/**
	 * campaign source
	 *
	 * @var string
	 */
	private $source = 'newsletter';

	/**
	 * campaign medium
	 *
	 * @var string
	 */
	private $medium = 'email';

	/**
	 * campaign name
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @param string $name
	 */
	public function __construct($name = '')
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getMedium()
	{
		return $this->medium;
	}

	/**
	 * set medium
	 *
	 * @param string $medium
	 *
	 * @return Campaign
	 */
	public function setMedium($medium)
	{
		$this->medium = $medium;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * set name
	 *
	 * @param string $name
	 *
	 * @return Campaign
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSource()
	{
		return $this->source;
	}

	/**
	 * set source
	 *
	 * @param string $source
	 *
	 * @return Campaign
	 */
	public function setSource($source)
	{
		$this->source = $source;

		return $this;
	}
}
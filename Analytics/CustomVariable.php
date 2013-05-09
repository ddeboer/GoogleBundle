<?php

namespace AntiMattr\GoogleBundle\Analytics;

class CustomVariable
{
	/**
	 * @var int
	 */
	private $index;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var mixed
	 */
	private $value;

	/**
	 * @var string
	 */
	private $scope;

	/**
	 * @var string
	 */
	private $trackerName;

	/**
	 * @param int $index
	 * @param string $name
	 * @param mixed $value
	 * @param string $scope
	 * @param string $trackerName
	 */
	public function __construct($index, $name, $value, $scope, $trackerName)
	{
		$this->index = $index;
		$this->name = $name;
		$this->value = $value;
		$this->scope = $scope;
		$this->trackerName = $trackerName . '.';
	}

	/**
	 * @return int
	 */
	public function getIndex()
	{
		return $this->index;
	}

	/**
	 * @return string
	 */
	public function getTrackerName()
	{
		return $this->trackerName;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @return string
	 */
	public function getScope()
	{
		return $this->scope;
	}
}

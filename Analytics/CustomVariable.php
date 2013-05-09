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
	 * @var bool
	 */
	private $isValueComputed;

	/**
	 * @param int $index
	 * @param string $name
	 * @param mixed $value Variable value or Twig variable name (f.ex. app.request.locale) when $isValueComputed is false
	 * @param string $scope
	 * @param string $trackerName
	 * @param bool $isValueComputed
	 */
	public function __construct($index, $name, $value, $scope, $trackerName, $isValueComputed = true)
	{
		$this->index = $index;
		$this->name = $name;
		$this->value = $value;
		$this->scope = $scope;
		$this->trackerName = $trackerName . '.';
		$this->isValueComputed = $isValueComputed;
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
	 * @return bool
	 */
	public function isValueComputed()
	{
		return $this->isValueComputed;
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

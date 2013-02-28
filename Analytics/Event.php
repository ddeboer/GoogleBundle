<?php

namespace AntiMattr\GoogleBundle\Analytics;

/**
 * @link http://code.google.com/apis/analytics/docs/tracking/eventTrackerGuide.html
 */
class Event
{
    private $action;
    private $category;
    private $label;
    private $value;
    private $trackerName;

    public function __construct($category, $action, $label = null, $value = null, $trackerName)
    {
        $this->action = $action;
        $this->category = $category;
        $this->label = $label;
        $this->value = $value;
        $this->trackerName = $trackerName . '.';
    }

    public function getTrackerName()
    {
        return $this->trackerName;
    }

    /**
     * @return string $action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return string $label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return string $value
     */
    public function getValue()
    {
        return $this->value;
    }
}

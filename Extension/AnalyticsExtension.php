<?php

namespace AntiMattr\GoogleBundle\Extension;

use AntiMattr\GoogleBundle\Helper\AnalyticsHelper;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class AnalyticsExtension extends AbstractExtension implements GlobalsInterface
{
    private AnalyticsHelper $analyticsHelper;

    public function __construct(AnalyticsHelper $analyticsHelper)
    {
        $this->analyticsHelper = $analyticsHelper;
    }

    public function getGlobals(): array
    {
        return [
            'google_analytics' => $this->analyticsHelper,
        ];
    }
}

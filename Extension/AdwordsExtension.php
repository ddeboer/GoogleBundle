<?php

namespace AntiMattr\GoogleBundle\Extension;

use AntiMattr\GoogleBundle\Helper\AdwordsHelper;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class AdwordsExtension extends AbstractExtension implements GlobalsInterface
{
    private AdwordsHelper $adwordsHelper;

    public function __construct(AdwordsHelper $adwordsHelper)
    {
        $this->adwordsHelper = $adwordsHelper;
    }

    public function getGlobals(): array
    {
        return [
            'google_adwords' => $this->adwordsHelper,
        ];
    }
}

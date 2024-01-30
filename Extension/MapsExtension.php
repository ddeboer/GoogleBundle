<?php

namespace AntiMattr\GoogleBundle\Extension;

use AntiMattr\GoogleBundle\Helper\MapsHelper;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class MapsExtension extends AbstractExtension implements GlobalsInterface
{
    private MapsHelper $mapsHelper;

    public function __construct(MapsHelper $mapsHelper)
    {
        $this->mapsHelper = $mapsHelper;
    }

    public function getGlobals(): array
    {
        return [
            'google_maps' => $this->mapsHelper,
        ];
    }
}

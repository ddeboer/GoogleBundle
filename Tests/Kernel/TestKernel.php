<?php

namespace AntiMattr\GoogleBundle\Tests\Kernel;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class TestKernel extends Kernel
{
    public function registerBundles()
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
//            new \Symfony\Bundle\AsseticBundle\AsseticBundle(),
//            new \Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
//            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),

            new \AntiMattr\GoogleBundle\GoogleBundle(),
        ];
    }

    public function getCacheDir()
    {
        return parent::getCacheDir();
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');

        if (file_exists(__DIR__.'/config/parameters.yml')) {
            $loader->load(__DIR__.'/config/parameters.yml');
        }
    }
}

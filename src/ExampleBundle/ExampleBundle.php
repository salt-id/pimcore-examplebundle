<?php

namespace SaltId\ExampleBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class ExampleBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    public function getInstaller()
    {
        $this->container->get(Installer::class);
    }

    public function getJsPaths()
    {
        return [
            '/bundles/example/js/pimcore/startup.js'
        ];
    }

    /**
     * Returns the composer package name used to resolve the version
     *
     * @return string
     */
    protected function getComposerPackageName(): string
    {
        return 'saltid/pimcore-examplebundle';
    }
}
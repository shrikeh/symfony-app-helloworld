<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Bundle;

use Shrikeh\HelloWorld\Bundle\DependencyInjection\HelloWorldExtension;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class HelloWorld extends AbstractBundle
{
    public function getContainerExtension(): HelloWorldExtension
    {
        return new HelloWorldExtension();
    }
}

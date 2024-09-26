<?php

declare(strict_types=1);

use Shrikeh\HelloWorld\Bundle\HelloWorld;
use Shrikeh\SymfonyApp\Bundle\App;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;

return [
    FrameworkBundle::class => ['all' => true],
    App::class  => ['all' => true],
    HelloWorld::class => ['all' => true],
];

<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function(ContainerConfigurator $container) {
    $container->import('services/person.php');
    $container->import('services/product.php');
    $container->import('services/shared.php');
};
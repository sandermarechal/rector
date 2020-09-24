<?php

declare(strict_types=1);

use Migrify\PhpConfigPrinter\Printer\PhpParserPhpConfigPrinter;
use Migrify\PhpConfigPrinter\YamlToPhpConverter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\Yaml\Parser;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->public()
        ->autowire();

    $services->load('Rector\SymfonyPhpConfig\\', __DIR__ . '/../src')
        ->exclude([__DIR__ . '/../src/Rector']);

    $services->set(YamlToPhpConverter::class);
    $services->set(Parser::class);
    $services->set(PhpParserPhpConfigPrinter::class);
};

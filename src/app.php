<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Cspray\PsalmStubImportType\ConfigurationLoader;
use Cspray\PsalmStubImportType\ContainerFactory;

$container = ContainerFactory::createContainer();

$loader = $container->get(ConfigurationLoader::class);
$config = $container->get(ContainerFactory::StubConfigurationService);

var_export($loader);
var_export($config);
<?php declare(strict_types=1);

namespace Cspray\PsalmStubImportType;

use Laminas\ServiceManager\ServiceManager;
use Psr\Container\ContainerInterface;

/**
 * @psalm-import-type StubConfiguration from ConfigurationLoader
 */
class ContainerFactory {

    public const StubConfigurationService = 'STUB_CONFIGURATION_SERVICE';

    public static function createContainer() : ContainerInterface {
        return new ServiceManager([
            'factories' => [
                self::StubConfigurationService =>
                /**
                 * @return StubConfiguration
                 */
                static function(ContainerInterface $container) : array {
                    return $container->get(ConfigurationLoader::class)->loadConfiguration();
                },
                ConfigurationLoader::class => static function() : ConfigurationLoader {
                    return new ConfigurationLoader();
                }
            ]
        ]);
    }


}
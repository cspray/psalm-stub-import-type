<?php declare(strict_types=1);

/**
 * @psalm-import-type StubConfiguration from \Cspray\PsalmStubImportType\ConfigurationLoader
 */
namespace Psr\Container {

    use Cspray\PsalmStubImportType\ContainerFactory;

    interface ContainerInterface {

        /**
         * @psalm-param string|class-string<T> $service
         * @psalm-return (
         *     $service is class-string<T> ? T :
         *         $service is ContainerFactory::StubConfigurationService ? StubConfiguration : mixed
         * )
         * @psalm-template T of object
         */
        function get($service);
    }

}
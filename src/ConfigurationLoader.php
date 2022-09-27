<?php declare(strict_types=1);

namespace Cspray\PsalmStubImportType;

/**
 * @psalm-type StubConfiguration = array{
 *     foo: string,
 *     bar: string,
 *     baz: int
 * }
 */
class ConfigurationLoader {

    /**
     * @return StubConfiguration
     */
    public function loadConfiguration() : array {
        return [
            'foo' => 'danger zone',
            'bar' => 'club soda',
            'baz' => 42
        ];
    }

}
<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Singleton;

use Edubovic\GofPhp\Creational\Singleton\Exception\CannotUnserializeException;
use Edubovic\GofPhp\Creational\Singleton\Exception\InstanceLimitException;

final class Database
{
    private static array $instances = [];
    private string $key;

    private function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @throws InstanceLimitException
     */
    public static function getInstance(string $key): self
    {
        if (\count(self::$instances) > 10) {
            throw new InstanceLimitException();
        }

        if (false === isset(self::$instances[$key])) {
            self::$instances[$key] = new Database($key);
        }

        return self::$instances[$key];
    }

    public function getConnect(): string
    {
        return $this->key;
    }

    public static function countInstances(): int
    {
        return \count(self::$instances);
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new CannotUnserializeException('Cannot unserialize a singleton.');
    }
}

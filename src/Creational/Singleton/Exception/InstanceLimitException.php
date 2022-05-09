<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Singleton\Exception;

final class InstanceLimitException extends \Exception
{
    protected $message = 'Instance limit reached.';
}

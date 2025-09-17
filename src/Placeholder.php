<?php

declare(strict_types=1);

namespace Netserva\Placeholder;

/**
 * NetServa namespace placeholder class
 *
 * This is a temporary placeholder to reserve the netserva namespace on Packagist.
 * Real NetServa infrastructure management packages coming soon.
 */
class Placeholder
{
    public const VERSION = '1.0.0';

    public function getMessage(): string
    {
        return 'NetServa Infrastructure Stack - Coming Soon';
    }

    public function getVersion(): string
    {
        return self::VERSION;
    }
}
<?php

declare(strict_types=1);

namespace Potter\Resettable;

interface ResettableInterface
    extends \Monolog\ResettableInterface,
            \Symfony\Contracts\Service\ResetInterface
{
    public function reset(): void;
}
<?php

declare(strict_types=1);

namespace Potter\Resettable;

interface ResettableInterface 
{
    public function reset(): void;
}

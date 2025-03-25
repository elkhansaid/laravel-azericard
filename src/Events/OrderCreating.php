<?php

namespace Elkhansaid\Azericard\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Elkhansaid\Azericard\Azericard;

class OrderCreating
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public string $orderId,
        public int|float $amount,
        public Azericard &$azericard,
    ) {}
}

<?php

namespace Elkhansaid\Azericard\Facade;

use Illuminate\Support\Facades\Facade;
use Elkhansaid\Azericard\Options;

/**
 * @method static \Elkhansaid\Azericard\Azericard setAmount(float|int $amount)
 * @method static \Elkhansaid\Azericard\Azericard setOrder(string $order)
 * @method static \Elkhansaid\Azericard\Azericard setDebug(bool $debug)
 * @method static \Elkhansaid\Azericard\Azericard setOptions(Options $options)
 * @method static boolean completeOrder($request)
 * @see \Elkhansaid\Azericard\Azericard
 */
class Azericard extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Elkhansaid\Azericard\Azericard::class;
    }
}

<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/contracts package
 *
 * Copyright (c) 2021 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\Contracts;

use Jojo1981\Contracts\Exception\ValueExceptionInterface;

/**
 * @package Jojo1981\Contracts
 */
interface ValueInterface
{
    /**
     * @param int|float|string $value
     * @throws ValueExceptionInterface
     */
    public function __construct($value);

    /**
     * @return int|float|string
     */
    public function getValue();

    /**
     * @param ValueInterface $otherValue
     * @return bool
     */
    public function match(ValueInterface $otherValue): bool;
}

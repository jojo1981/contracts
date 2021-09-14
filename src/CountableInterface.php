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

use Countable;

/**
 * @package Jojo1981\Contracts
 */
interface CountableInterface extends Countable
{
    /**
     * Returns true if this collection contains no elements.
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Returns true if this collection contains elements.
     *
     * @return bool
     */
    public function isNonEmpty(): bool;

    /**
     * Returns the number of elements in this collection.
     *
     * @return int
     */
    public function getSize(): int;
}

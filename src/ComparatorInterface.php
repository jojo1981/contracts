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

/**
 * @package Jojo1981\Contracts
 * @template T
 */
interface ComparatorInterface
{
    /**
     * @param class-string<T> $className
     */
    public function __construct(string $className);

    /**
     * Returns < 0 if $object1 is less than $object2; > 0 if $object1 is greater than $object2, and 0 if they are equal.
     *
     * @param T $object1
     * @param T $object2
     * @return int
     */
    public function compare(object $object1, object $object2): int;
}

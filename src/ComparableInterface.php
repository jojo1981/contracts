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
 * This interface describes a comparable object.
 * 
 * @package Jojo1981\Contracts
 * @template T of ComparableInterface
 */
interface ComparableInterface
{
    /**
     * Returns < 0 if $this is less than $object; > 0 if $this is greater than $object, and 0 if they are equal.
     *
     * @param T $object
     * @return int
     */
    public function compareTo($object): int;

    /**
     * Return true when $this is lower than $object
     *
     * @param T $object
     * @return bool
     */
    public function isLowerThan($object): bool;

    /**
     * Return true when $this is lower than or equal to $object
     *
     * @param T $object
     * @return bool
     */
    public function isLowerThanOrEqualTo($object): bool;

    /**
     * Return true when $this and $object are equal
     *
     * @param T $object
     * @return bool
     */
    public function isEqual($object): bool;

    /**
     * Return true when $this is higher than or equals to $object
     *
     * @param T $object
     * @return bool
     */
    public function isHigherThanOrEqualTo($object): bool;

    /**
     * Return true when $this is higher than $object
     *
     * @param T $object
     * @return bool
     */
    public function isHigherThan($object): bool;

    /**
     * Return true when $this and $object are not equal
     *
     * @param T $object
     * @return bool
     */
    public function isNotEqual($object): bool;
}

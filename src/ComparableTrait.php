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
 * @template T of ComparableInterface
 * @package Jojo1981\Contracts
 */
trait ComparableTrait
{
    /**
     * @param T $object
     * @return bool
     */
    public function isLowerThan($object): bool
    {
        return $this->compareTo($object) < 0;
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isLowerThanOrEqualTo($object): bool
    {
        return $this->compareTo($object) <= 0;
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isEqual($object): bool
    {
        return 0 === $this->compareTo($object);
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isHigherThanOrEqualTo($object): bool
    {
        return $this->compareTo($object) >= 0;
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isHigherThan($object): bool
    {
        return $this->compareTo($object) > 0;
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isNotEqual($object): bool
    {
        return !$this->isEqual($object);
    }

    /**
     * Returns < 0 if $this is less than $object; > 0 if $this is greater than $object, and 0 if they are equal.
     *
     * @param T $object
     * @return int
     */
    abstract public function compareTo($object): int;
}

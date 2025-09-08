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
 * @template T of ComparableInterface
 * @template-implements ComparableInterface<T>
 */
abstract class AbstractComparable implements ComparableInterface
{
    /**
     * @param T $object
     * @return bool
     */
    public function isLowerThan(ComparableInterface $object): bool
    {
        return $this->compareTo($object) < 0;
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isLowerThanOrEqualTo(ComparableInterface $object): bool
    {
        return $this->compareTo($object) <= 0;
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isEqual(ComparableInterface $object): bool
    {
        return 0 === $this->compareTo($object);
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isHigherThanOrEqualTo(ComparableInterface $object): bool
    {
        return $this->compareTo($object) >= 0;
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isHigherThan(ComparableInterface $object): bool
    {
        return $this->compareTo($object) > 0;
    }

    /**
     * @param T $object
     * @return bool
     */
    public function isNotEqual(ComparableInterface $object): bool
    {
        return !$this->isEqual($object);
    }
}

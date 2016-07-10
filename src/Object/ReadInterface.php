<?php

namespace Dhii\Data\Object;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something, the data members of which can be read and checked.
 *
 * @since [*next-version*]
 *
 * @author Dhii Team <development@dhii.co>
 */
interface ReadInterface
{
    /**
     * Get data for specific keys, or all data.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $key     The key to get data for. If null, all data will be retrieved.
     * @param mixed             $default The value to return if data member with specified key doesn't exist.
     *
     * @return array|mixed The value of the data member for specified key, if key is a string; otherwise, map of
     *                     data keys to values.
     */
    public function getData($key = null, $default = null);

    /**
     * Check if data exists.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $key The key to check the data for. If null, checks if any data is set at all.
     *
     * @return bool True if data exists; false otherwise;
     */
    public function hasData($key = null);
}

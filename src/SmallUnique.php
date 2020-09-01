<?php

namespace Submtd\SmallUnique;

class SmallUnique
{
    /**
     * Generate a small unique string.
     * @param int $id - seed integer
     * @param int $length - length of unique string
     * @return string
     */
    public static function id(int $length = 8) : string
    {
        return dechex(mt_rand(0, (1 << ($length << 2)) - 1));
    }
}

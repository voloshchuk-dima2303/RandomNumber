<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.05.19
 * Time: 22:30
 */

namespace App\Service\RandomNumber;

class RandomNaturalNumber implements RandomNumber
{
    const MIN_NUMBER = 0;

    const MAX_NUMBER = 1000000;

    /**
     * @return int
     */
    public function generate(): int
    {
        return rand(self::MIN_NUMBER, self::MAX_NUMBER);
    }
}
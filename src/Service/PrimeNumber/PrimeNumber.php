<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.05.19
 * Time: 22:21
 */

namespace App\Service\PrimeNumber;


interface PrimeNumber
{
    /**
     * @param int $number
     * @return bool
     */
    public function isPrime(int $number) : bool;
}
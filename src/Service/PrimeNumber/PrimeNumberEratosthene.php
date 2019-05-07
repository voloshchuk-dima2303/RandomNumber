<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.05.19
 * Time: 22:24
 */

namespace App\Service\PrimeNumber;


class PrimeNumberEratosthene implements PrimeNumber
{
    /**
     * @param int $number
     * @return bool
     */
    public function isPrime(int $number): bool
    {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
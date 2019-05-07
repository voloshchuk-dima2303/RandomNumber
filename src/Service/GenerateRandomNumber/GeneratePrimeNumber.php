<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.05.19
 * Time: 22:36
 */

namespace App\Service\GenerateRandomNumber;


class GeneratePrimeNumber extends GenerateRandomNumber
{
    /**
     * @return int
     */
    public function generate(): int
    {
        $number = $this->randomNumber->generate();

        if (!$this->primeNumber->isPrime($number)) {
            return $this->generate();
        }

        return $number;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 07.05.19
 * Time: 18:25
 */

namespace App\Service\GenerateRandomNumber;

use App\Service\PrimeNumber\PrimeNumber;
use App\Service\RandomNumber\RandomNumber;

abstract class GenerateRandomNumber
{
    /**
     * @var PrimeNumber
     */
    protected $primeNumber;

    /**
     * @var RandomNumber
     */
    protected $randomNumber;

    /**
     * GenerateRandomNumber constructor.
     * @param PrimeNumber $primeNumber
     * @param RandomNumber $randomNumber
     */
    public function __construct(PrimeNumber $primeNumber, RandomNumber $randomNumber)
    {
        $this->primeNumber = $primeNumber;
        $this->randomNumber = $randomNumber;
    }

    /**
     * @param PrimeNumber $primeNumber
     */
    public function changePrimeNumber(PrimeNumber $primeNumber): void
    {
        $this->primeNumber = $primeNumber;
    }

    /**
     * @param RandomNumber $randomNumber
     */
    public function changeRandomNumber(RandomNumber $randomNumber): void
    {
        $this->randomNumber = $randomNumber;
    }

    /**
     * @return int
     */
    abstract public function generate(): int;
}
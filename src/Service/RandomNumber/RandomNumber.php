<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.05.19
 * Time: 22:28
 */

namespace App\Service\RandomNumber;


interface RandomNumber
{
    /**
     * @return int
     */
    public function generate() : int;
}
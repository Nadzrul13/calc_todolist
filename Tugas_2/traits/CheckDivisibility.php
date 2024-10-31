<?php

namespace App\Traits;

trait CheckDivisibility {
    public function isDivisibleBy($number, $divisor) {
        return $number % $divisor == 0;
    }
}

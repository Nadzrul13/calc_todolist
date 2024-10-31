<?php

namespace App\Models;

use App\Abstracts\NumberPrinter;
use App\Interfaces\PrinterInterface;
use App\Traits\CheckDivisibility;

class Number extends NumberPrinter implements PrinterInterface {
    use CheckDivisibility;

    public function printNumbers($n) {
        for ($i = 1; $i <= $n; $i++) {
            if ($this->isDivisibleBy($i, 4) && $this->isDivisibleBy($i, 6)) {
                echo "Pemrograman Website 2024\n";
            } elseif ($this->isDivisibleBy($i, 5)) {
                echo "2024\n";
            } elseif ($this->isDivisibleBy($i, 4)) {
                echo "Pemrograman\n";
            } elseif ($this->isDivisibleBy($i, 6)) {
                echo "Website\n";
            } else {
                echo $i . "\n";
            }
        }
    }
}

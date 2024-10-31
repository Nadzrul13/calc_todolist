<?php

namespace App\Controllers;

use App\Models\Number;

class NumberController {
    public function execute($n) {
        $numberPrinter = new Number();
        $numberPrinter->printNumbers($n);
    }
}

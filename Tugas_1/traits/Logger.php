<?php

namespace App\Traits;

// Trait for logging
trait Logger {
    public function log($message) {
        echo "[LOG]: $message\n";
    }
}

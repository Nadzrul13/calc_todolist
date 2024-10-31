<?php

use App\Controllers\NumberController;

require_once __DIR__ . '/../index.php';

$controller = new NumberController();
$controller->execute(30); // Masukkan nilai sesuai kebutuhan

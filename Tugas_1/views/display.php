<?php

use App\Controllers\UserController;
use App\Models\Admin;
use App\Models\RegularUser;

require_once __DIR__ . '/../index.php';

$controller = new UserController();

echo "Admin User Details:\n";
$admin = new Admin("Joko", "jokon@gmail.com", ["manage_users", "edit_content"]);
$controller->displayUser($admin);

echo "\n\nRegular User Details:\n";
$user = new RegularUser("Roro", "roro@gmail.com", "Basic");
$controller->displayUser($user);

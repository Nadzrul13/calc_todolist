<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Models\RegularUser;

// Controller to handle user actions
class UserController {
    public function displayUser($user) {
        echo $user;
        echo "\nRole: " . $user->getRole();

        if ($user instanceof Admin) {
            echo "\nPermissions: " . implode(", ", $user->getPermissions());
        } elseif ($user instanceof RegularUser) {
            echo "\nAccess Level: " . $user->getAccessLevel();
        }
    }
}

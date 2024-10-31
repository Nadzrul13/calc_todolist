<?php

namespace App\Models;

use App\Abstracts\User;
use App\Traits\Logger;
use App\Interfaces\RoleInterface;

// Class for Admin user, inheriting from User class and using Logger trait
class Admin extends User implements RoleInterface {
    use Logger;

    private $permissions;

    public function __construct($name, $email, $permissions) {
        parent::__construct($name, $email);
        $this->permissions = $permissions;
    }

    // Implementing the abstract method
    public function getRole() {
        return "Admin";
    }

    // Additional method specific to Admin class
    public function getPermissions() {
        $this->log("Retrieving permissions for admin: $this->name");
        return $this->permissions;
    }
}

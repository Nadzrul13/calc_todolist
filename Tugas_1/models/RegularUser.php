<?php

namespace App\Models;

use App\Abstracts\User;
use App\Traits\Logger;
use App\Interfaces\RoleInterface;

// Class for RegularUser, inheriting from User class and using Logger trait
class RegularUser extends User implements RoleInterface {
    use Logger;

    private $accessLevel;

    public function __construct($name, $email, $accessLevel) {
        parent::__construct($name, $email);
        $this->accessLevel = $accessLevel;
    }

    // Implementing the abstract method
    public function getRole() {
        return "Regular User";
    }

    // Additional method specific to RegularUser class
    public function getAccessLevel() {
        $this->log("Retrieving access level for user: $this->name");
        return $this->accessLevel;
    }
}

<?php

namespace App\Abstracts;

// Abstract class with an abstract method
abstract class User {
    protected $name;
    protected $email;

    // Constructor to initialize properties
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    // Abstract method that must be implemented by child classes
    abstract public function getRole();

    // Magic method to display user info when object is treated as string
    public function __toString() {
        return "User: $this->name, Email: $this->email";
    }
}

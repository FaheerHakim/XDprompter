<?php
class User {
    private $email;
    private $username;
    private $password;

    // setters and getters
    public function setEmail($email) {
        if (empty($email)) {
            throw new Exception("Email cannot be empty");
        }
        $this->email = $email;
        return $this;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setUsername($username) {
        if (empty($username)) {
            throw new Exception("Username cannot be empty");
        }
        $this->username = $username;
        return $this;
    }
    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        if (empty($password)) {
            throw new Exception("Password cannot be empty");
        }
        $this->password = $password;
        return $this;
    }
    public function getPassword() {
        return $this->password;
    }

    
}
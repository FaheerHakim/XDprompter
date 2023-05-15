<?php
class User {
    private $username;
    private $email;
    private $password;

    // setters and getters


   
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

    // save
    public function save() {
        // connectie
        $conn = Db::getConnection();

        // query (insert)
        $statement = $conn->prepare("insert into users (username, email, password) values (:username, :email, :password)");
        $username = $this->getUsername();
        $email = $this->getEmail();
        $password = $this->getPassword();
        $statement->bindValue(":username", $username);
        $statement->bindValue(":email", $email);
        $statement->bindValue(":password", $password);
        
        // zonder execute wordt de query niet uitgevoerd
        $result = $statement->execute();
        return $result;
    }


    // static function
    public static function getAll() {
        // connectie
        $conn = Db::getConnection();

        // query (select)
        $statement = $conn->prepare("select * from users");
        $statement->execute();
        // als het statement gerund heeft, dan gaan we hier alle rijen uithalen in de vorm van een associatieve array
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}
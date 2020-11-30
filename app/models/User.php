<?php

class User extends Model
{
    private $username;
    private $password;

    private $feedbackArray = array();

    public function login()
    {
        $query = $this->dbh->prepare(
            "SELECT * FROM users 
            WHERE username=:username 
            AND password=:password"
        );
        $query->bindValue(":username", $this->username);
        $query->bindValue(":password", hash("sha512", $this->password));
        $query->execute();
        $result = $query->fetch();
        if ($query->rowCount() == 1) {
            $_SESSION["userLoggedIn"] = $result;
            return true;
        } else {
            array_push($this->feedbackArray, Messages::$loginFailed);
            return false;
        }
    }

    public function register()
    {
        // Check if username already exists
        $query = $this->dbh->prepare(
            "SELECT username FROM users 
            WHERE username=:username"
        );
        $query->bindValue(":username", $this->username);
        $query->execute();
        $result = $query->fetch();
        if ($query->rowCount() != 0) {
            array_push($this->feedbackArray, Messages::$usernameInUse);
            return false;
        }
        
        // Insert username and password
        $query = $this->dbh->prepare(
            "INSERT INTO users (username, password) 
             VALUES (:username, :password)"
        );
        $query->bindValue(":username", $this->username);
        $query->bindValue(":password", hash("sha512", $this->password));
        if ($query->execute()) {
            array_push($this->feedbackArray, Messages::$registrationSuccessful);
            return true;
        } else {
            array_push($this->feedbackArray, Messages::$registrationFailed);
            return false;
        }
        
    }

    public function logout()
    {
        session_destroy();
    }

    /*
     * Getters & Setters
     */

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getFeedbackArray()
    {
        return $this->feedbackArray;
    }

    public function setFeedbackArray($feedbackArray)
    {
        $this->feedbackArray = $feedbackArray;
    }
}

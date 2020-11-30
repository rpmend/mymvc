<?php

class Contact extends Model
{
    public function sendForm($data)
    {
        $query = $this->dbh->prepare(
            "INSERT INTO contacts (name, subject, email, message) 
             VALUES (:name, :subject, :email, :message)"
        );
        $query->bindValue(":name", $data['name']);
        $query->bindValue(":email", $data['email']);
        $query->bindValue(":subject", $data['subject']);
        $query->bindValue(":message", $data['message']);
        if ($query->execute()) {
            Messages::$flash = Messages::$contactSuccessful;
            return true;
        } else {
            Messages::$flash = Messages::$contactFailed;
            return false;
        }
    }
}

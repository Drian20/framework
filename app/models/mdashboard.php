<?php

class mDashboard extends Model {

    function __construct() {
        parent::__construct();
    }

    function insert_user($username, $name, $lastname, $password, $email, $country, $rol) {
        try {
            $sql = "SELECT * FROM users WHERE email=:email";
            $this->query($sql);
            $this->bind(':email', $email);
            $this->execute();
            if ($this->rowCount() == 0) {
                $query = "INSERT INTO users (username, name, lastname, password, email, country, rol) VALUES (:username, :name, :lastname, :password, :email, :country, :rol)";
                $this->query($query);
                $this->bind(':username', $username);
                $this->bind(':name', $name);
                $this->bind(':lastname', $lastname);
                $this->bind(':password', $password);
                $this->bind(':email', $email);
                $this->bind(':country', $country);
                $this->bind(':rol', $rol);
                $this->execute();
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    function update_user($username, $name, $lastname, $password, $email, $country, $rol) {
        try {
            $sql = "SELECT * FROM users WHERE username=:username";
            $this->query($sql);
            $this->bind(':username', $username);
            $this->execute();
            if ($this->rowCount() == 1) {
                $query = "UPDATE users SET username = :username, name = :name, lastname = :lastname, password = :password, email = :email, country = :country, rol = :rol WHERE username = :username";
                $this->query($query);
                $this->bind(':username', $username);
                $this->bind(':name', $name);
                $this->bind(':lastname', $lastname);
                $this->bind(':password', $password);
                $this->bind(':email', $email);
                $this->bind(':country', $country);
                $this->bind(':rol', $rol);
                $this->execute();
                die("si");  
                return TRUE;
            } else {
                die("no");
                return FALSE;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    function delete_user($username) {
        try {
            $query = "DELETE FROM users WHERE username=:username";
            $this->query($query);
            $this->bind(':username', $username);
            $this->execute();
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

}

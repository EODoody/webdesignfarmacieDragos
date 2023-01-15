<?php

class Signup extends DatabaseHandler{

    protected function setUser($firstname, $lastname, $email, $password){
        $stmt = $this->connect()->prepare('INSERT INTO users (firstname,lastname,email,userpassword) VALUES(?,?,?,?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($firstname, $lastname, $email, $hashedPassword))){
            $stmt =null;
            header("Location: ../loginregistration/inregistrare.php?error=somethinghasfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($firstname,$email){
        $stmt = $this->connect()->prepare('SELECT IDUser FROM users WHERE email = ? OR firstname = ?;');

        if(!$stmt->execute(array($email, $firstname))){
            $stmt = null;
            header("Location: ../loginregistration/inregistrare.php?error=somethingfailed");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($profileData) > 0) {
                    $stmt = null;
                    header("location: ../loginregistration/inregistrare.php?error=alreadyexists");
                    exit();
        }

        $stmt = null;
        return $profileData;
    }

}
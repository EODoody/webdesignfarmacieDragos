<?php

class Login extends DatabaseHandler{

    protected function getUser($email,  $password){
        $stmt = $this-> connect()->prepare('SELECT userpassword FROM users WHERE email = ?');

        if(!$stmt->execute(array($email))){
            $stmt =null;
            header("Location: ../loginregistration/login.php?error=somethingfailed");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($profileData) == 0) {
                    $stmt = null;
                    header("location: ../loginregistration/login.php?error=notfound");
                    exit();
        }

        $checkPassword = password_verify($password, $profileData[0]["userpassword"]);

        if($checkPassword == false)
        {
            $stmt = null;
            header("Location: ../loginregistration/login.php?error?wrongpassword");
            exit();
        }

        elseif($checkPassword == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ? AND userpassword = ?;');
            if(!$stmt->execute(array($email, $profileData[0]['userpassword']))){
                $stmt =null;
                header("Location: ../loginregistration/login.php?error=stmtfailed");
                exit();
            }
        }
        
        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($profileData) == 0) {
                    $stmt = null;
                    header("location: ../loginregistration/login.php?error=notfound");
                    exit();
        }

        session_start();
        $_SESSION["IDUser"] = $profileData[0]["IDUser"];
        $_SESSION["firstname"] = $profileData[0]["firstname"];

        $stmt = null;
    }
}
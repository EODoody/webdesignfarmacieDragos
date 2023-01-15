<?php

class SignupController extends Signup {

    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $repeat_password;

    public function __construct($firstname, $lastname, $email, $password, $repeat_password){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->repeat_password = $repeat_password;
    }

    public function signupUser()
    {
        if($this->matchPassword() == false){
            header("location: ../loginregistration/inregistrare.php?error=matchPassword");
            exit();
        }
        if($this->userAlreadyExists() == false){
            header("location: ../loginregistration/inregistrare.php?error=userAlreadyExists");
            exit();
        }

        $this->setUser($this->firstname, $this->lastname, $this->email, $this->password);
    }


    private function matchPassword(){
        $result =true;
        if(!($this->password == $this->repeat_password))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function userAlreadyExists(){
        $result =true;
        if($this->checkUser($this->firstname, $this->email))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}
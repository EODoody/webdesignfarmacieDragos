<?php

class ContactController extends Contact {

    private $details;
    private $message;

    public function __construct($name, $email, $message){
        $this->details = $name." ".$email;
        $this->message = $message;
    }

    public function postContact()
    {
        if($this->emptyInput() == false){
            header("location: ../pagini/contact.php?error=emptyInput");
            exit();
        }
        $this->createContact($this->message, $this->details);
    }

    private function emptyInput(){
        $result =true;
        if(empty($this->message) || 
        empty($this->details) ){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}
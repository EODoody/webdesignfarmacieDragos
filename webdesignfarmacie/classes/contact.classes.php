<?php

class Contact extends DatabaseHandler{

    protected function createContact($message, $details){
        $stmt = $this->connect()->prepare('INSERT INTO contact (comentary, details) VALUES(?,?);');
        
        if(!$stmt->execute(array($message, $details))){
            $stmt =null;
            header("Location: ../pagini/contact.php?error=somethingfailed");
            exit();
        }
        $stmt = null;
    }
}
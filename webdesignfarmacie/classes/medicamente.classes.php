<?php

class Medicamente extends DatabaseHandler{

    public function getMeds() {
        $sql = "SELECT * FROM medicamente";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $medicamente = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $medicamente;
    }
}
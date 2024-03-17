<?php
 function log_audit_trail($event_type, $description, $username){
    try{
        $conn = conn::getConnection();
        $query = $conn->prepare("INSERT INTO `audit_trail` (`event_type`, `description`, `datetime`, `username`)
                        VALUES 
                        (:event_type, :description, NOW(), :username)");
        $query->execute([
            ':event_type' => $event_type,
            ':description' => $description,
            ':username' => $username
      ]);
    } catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
 }
?>
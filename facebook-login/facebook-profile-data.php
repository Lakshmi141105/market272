<?php

class FB_Users extends FB_API {
    
    
    function __construct(){      
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->hostname, $this->DBusername, $this->DBpassword, $this->DBname);
            if($conn->connect_error){
                die("Database is not connected: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    
    function validUser($userData = array()){      
        if(!empty($userData)){
            // Check whether user data already exists in database
            $getQuery = "SELECT * FROM ".$this->usersTableName." WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";
            $getResult = $this->db->query($getQuery);
            if($getResult->num_rows > 0){
                // Update user data if already exists
                $SQLquery = "UPDATE ".$this->usersTableName." SET first_name = '".$userData['first_name']."', last_name = '".$userData['last_name']."', email = '".$userData['email']."', gender = '".$userData['gender']."', picture = '".$userData['picture']."', link = '".$userData['link']."', modified = NOW() WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";
                $update = $this->db->query($SQLquery);
            }else{
                // Insert user data
                $SQLquery = "INSERT INTO ".$this->usersTableName." SET oauth_provider = '".$userData['oauth_provider']."', oauth_uid = '".$userData['oauth_uid']."', first_name = '".$userData['first_name']."', last_name = '".$userData['last_name']."', email = '".$userData['email']."', gender = '".$userData['gender']."', picture = '".$userData['picture']."', link = '".$userData['link']."', created = NOW(), modified = NOW()";
                $insert = $this->db->query($SQLquery);
            }
            
            // Get user data from the database
            $result = $this->db->query($getQuery);
            $userData = $result->fetch_assoc();

            $getQuery = "INSERT INTO user values() ";
            $getResult = $this->db->query($getQuery);
        }
        
        // Return user data
        return $userData;
    }
}
?>
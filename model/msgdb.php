<?php
    include("connect.php");

    function insert_message(){
        //insert user into the db users table
        global $db;
        
        $query = "INSERT INTO messages (message, user_id) VALUES ('".$_POST['message']."', ".$_POST['user_id'].")";
        $result = $db->query($query);
    }
    
    function get_messages(){
        //read the users from the db users table
        global $db;
        $query = "SELECT messages.message, users.username FROM messages
        LEFT JOIN users ON users.id = messages.user_id";
        
        $result = $db->query($query);
        echo json_encode($result->fetchAll());
    }

    function update_message(){
        //update info of user from db users table
    }

    function delete_message(){
        //remove a row o fuser from the db users table
    }
    
    
    
    //Testing
    //insert_user();
?>

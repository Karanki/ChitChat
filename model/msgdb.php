<?php
    include("connect.php");

    function insert_message(){
        //insert user into the db users table
        global $db;
        
        $query = "INSERT INTO messages (message, user_id) VALUES ('".$_POST['message']."', '".$_POST['user_id']."')";
        $result = $db->query($query);
    }
    
    function get_messages(){
        //read the users from the db users table
        global $db;
        $query = "SELECT messages.id AS message_id, messages.message, users.username, messages.user_id,
        
                (SELECT (*) FROM likes WHERE likes.message_id = message_id) AS likeNum  
                FROM messages 
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
    
    function insert_like(){
        global $db;
        $query = "INSERT INTO likes ()message_id, user_id) VALUES ('".$_POST['message_id']."' , "._POST['user_id'].")";
        $result = $db->query($query);
        echo json_encode($result->fetchAll());
    }
    //Testing
    //insert_user();
?>

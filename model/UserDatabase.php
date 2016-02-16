<?php 
include("connect.php");

function insert_user() {
    // insert info into the users table (register)
    global $db;
    $query = "INSERT INTO users (username, password) VALUES ('".$_POST['username']."', '".$_POST['password']."')";
    $result = $db->query($query);
}

function get_users() {
    // reads the users info from the users table
}

function get_user_by_username_password() {
    // grab user based on the username and password (login)
    global $db;
    $query = "SELECT id FROM users WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
    $result = $db->query($query);
    
    echo json_encode($result->fetchAll());
}

function update_user(){

}
function delete_user(){

}

?>
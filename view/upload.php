<?php

 var_dump($_POST);
 var_dump($_FILES);

//check if directory exists
if(is_dir("../img/".$_POST['user_id']."/")){
    //make a new directory if it doesnt exists
    mkdir("../img/".$_POST['user_id'], 0775);
    
    

move_uploaded_file($_FILES["images"]["tmp_name"][0], "../img/1/avatar.jpg");
    
    
    
}







?>